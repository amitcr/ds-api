<?php
namespace App\Middleware;

use App\Support\CacheInterface;
use App\Support\FileCache;

class RateLimitMiddleware implements MiddlewareInterface {
    private $limit = 120; // per minute

    public function handle($request) {
        $cache = new FileCache(); // swap with APCu if available
        $ip = $_SERVER['REMOTE_ADDR'] ?: 'anon';
        $key = 'rl:' . date('YmdHi') . ':' . $ip;
        $count = (int)$cache->get($key, 0);
        if ($count >= $this->limit) {
            header('Content-Type: application/json; charset=utf-8');
            http_response_code(429);
            echo json_encode(['error' => 'Too Many Requests']);
            exit;
        }
        $cache->set($key, $count + 1, 70);
    }
}
