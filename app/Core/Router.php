<?php
namespace App\Core;

use App\Core\Response;

class Router
{
    private $request;
    private $routes = []; // array of route entries
    private $groupStack = [];

    public function __construct($request = null)
    {
        // $request may be an App\Core\Request instance or null
        $this->request = $request;
    }

    /**
     * Define a route (method path -> handler)
     * handler: [ControllerClass::class, 'method'] OR callable
     * middleware: array of middleware class names
     */
    public function add(string $method, string $path, $handler, array $middleware = [])
    {
        $method = strtoupper($method);

        $prefix = $this->currentGroupPrefix();
        $full = rtrim($prefix, '/') . '/' . ltrim($path, '/');
        $full = $this->normalize($full);

        // combine group middlewares + route middlewares
        $mws = array_merge($this->currentGroupMiddleware(), $middleware);

        // compile regex + param names
        [$regex, $paramNames] = $this->compilePathToRegex($full);

        $this->routes[] = [
            'method' => $method,
            'path' => $full,
            'regex' => $regex,
            'params' => $paramNames,
            'handler' => $handler,
            'middleware' => $mws,
        ];
    }

    // convenience helpers
    public function get(string $path, $handler, array $middleware = []) { $this->add('GET', $path, $handler, $middleware); }
    public function post(string $path, $handler, array $middleware = []) { $this->add('POST', $path, $handler, $middleware); }
    public function put(string $path, $handler, array $middleware = []) { $this->add('PUT', $path, $handler, $middleware); }
    public function delete(string $path, $handler, array $middleware = []) { $this->add('DELETE', $path, $handler, $middleware); }

    /**
     * Group routes together.
     * $opts = ['prefix' => '/v1', 'middleware' => [SomeMiddleware::class]]
     */
    public function group(array $opts, callable $cb)
    {
        $this->groupStack[] = [
            'prefix' => $opts['prefix'] ?? '',
            'middleware' => $opts['middleware'] ?? []
        ];

        $cb($this);

        array_pop($this->groupStack);
    }

    /**
     * Dispatch the current HTTP request.
     */
    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = $this->getRequestPath(); // normalized path like "/v1/health"

        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) continue;
            if (preg_match($route['regex'], $path, $matches)) {
                // extract params
                $params = [];
                foreach ($route['params'] as $name) {
                    $params[$name] = isset($matches[$name]) ? $matches[$name] : null;
                }

                // run middlewares (group + route)
                foreach ($route['middleware'] as $mw) {
                    $this->runMiddleware($mw, $params);
                }

                // call handler
                $handler = $route['handler'];
                if (is_callable($handler) && is_array($handler) === false) {
                    // closure or function - call with ($request, $params) if accepted
                    $this->invokeCallable($handler, $params);
                } elseif (is_array($handler) && count($handler) === 2) {
                    [$class, $methodName] = $handler;
                    if (!class_exists($class)) {
                        Response::json(['error' => "Controller $class not found"], 500);
                    }
                    $controller = new $class();
                    $this->invokeControllerMethod($controller, $methodName, $params);
                } else {
                    Response::json(['error' => 'Invalid route handler'], 500);
                }
                // dispatched
                return;
            }
        }

        Response::json(['error' => 'Route not found', 'path' => $path], 404);
    }

    /* ---------------- helpers ---------------- */

    private function currentGroupPrefix(): string
    {
        $prefix = '';
        foreach ($this->groupStack as $g) {
            $prefix .= $g['prefix'] ?? '';
        }
        return $prefix;
    }

    private function currentGroupMiddleware(): array
    {
        $m = [];
        foreach ($this->groupStack as $g) {
            $m = array_merge($m, $g['middleware'] ?? []);
        }
        return $m;
    }

    private function normalize(string $p): string
    {
        $p = preg_replace('#//+#', '/', $p);
        $p = '/' . trim($p, '/');
        return $p === '/' ? '/' : rtrim($p, '/');
    }

    /**
     * convert /v1/users/{id}/posts/{postId} -> regex and param names
     * returns [regex, ['id','postId']]
     */
    private function compilePathToRegex(string $path): array
    {
        $paramNames = [];
        $regex = preg_replace_callback('#\{([a-zA-Z0-9_]+)\}#', function ($m) use (&$paramNames) {
            $paramNames[] = $m[1];
            return '(?P<' . $m[1] . '>[^\./]+)';
        }, $path);

        $regex = '#^' . rtrim($regex, '/') . '/?$#';
        return [$regex, $paramNames];
    }

    /**
     * Determine request path in a subfolder-safe way.
     * Strips everything *before* "/api" if present, otherwise removes script directory.
     * Returns leading slash path like "/v1/health" or "/"
     */
    private function getRequestPath(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // If URI contains '/api', use the segment after the first '/api'
        $pos = strpos($uri, '/api');
        if ($pos !== false) {
            $after = substr($uri, $pos + 4); // skip '/api'
            $path = $after === '' ? '/' : $after;
            return $this->normalize($path);
        }

        // fallback: try to remove script directory (e.g. /fourtemperaments/api/public)
        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        $scriptDir = rtrim(dirname($script), '/\\');
        if ($scriptDir !== '' && $scriptDir !== '/') {
            if (strpos($uri, $scriptDir) === 0) {
                $uri = substr($uri, strlen($scriptDir));
            }
        }

        // strip leading/trailing and return
        return $this->normalize($uri);
    }

    private function runMiddleware(string $mwClass, array $params = [])
    {
        if (!class_exists($mwClass)) {
            Response::json(['error' => "Middleware $mwClass not found"], 500);
        }
        $mw = new $mwClass();

        // use reflection to call handle with ($request) or nothing or ($request,$params)
        if (!method_exists($mw, 'handle')) {
            Response::json(['error' => "Middleware $mwClass must implement handle()"], 500);
        }
        $ref = new \ReflectionMethod($mw, 'handle');
        $args = [];
        if ($ref->getNumberOfParameters() >= 1) {
            $args[] = $this->request;
        }
        if ($ref->getNumberOfParameters() >= 2) {
            $args[] = $params;
        }
        $ref->invokeArgs($mw, $args);
    }

    private function invokeCallable($callable, array $params = [])
    {
        $ref = new \ReflectionFunction($callable);
        $args = [];
        if ($ref->getNumberOfParameters() >= 1) $args[] = $this->request;
        if ($ref->getNumberOfParameters() >= 2) $args[] = $params;
        $result = $ref->invokeArgs($args);
        $this->sendResult($result);
    }

    /*private function invokeControllerMethod($controller, string $methodName, array $params = [])
    {
        $ref = new \ReflectionMethod($controller, $methodName);
        $args = [];
        if ($ref->getNumberOfParameters() >= 1) $args[] = $this->request;
        if ($ref->getNumberOfParameters() >= 2) $args[] = $params;
        $result = $ref->invokeArgs($controller, $args);
        $this->sendResult($result);
    }*/

    private function invokeControllerMethod($controller, string $methodName, array $params = [])
    {
        $ref = new \ReflectionMethod($controller, $methodName);
        $args = [];

        if ($ref->getNumberOfParameters() >= 1) {
            $args[] = $this->request; // always first param
        }

        if ($ref->getNumberOfParameters() >= 2) {
            // Instead of passing $params array directly, pass values in order
            foreach ($params as $value) {
                // optionally cast numeric ids
                $args[] = is_numeric($value) ? (int) $value : $value;
            }
        }

        $result = $ref->invokeArgs($controller, $args);
        $this->sendResult($result);
    }


    private function sendResult($result)
    {
        // if controller already echoed and exited, nothing to do
        if (is_null($result)) return;
        // if result is a Response object or array - output as JSON
        if (is_array($result) || is_object($result)) {
            Response::json($result);
        } elseif (is_string($result)) {
            echo $result;
        } else {
            Response::json(['result' => $result]);
        }
    }
}
