<?php
namespace App\Services\Http;

use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\RequestException;
use App\Core\Config;
use App\Core\Logger;

class BaseHttpService
{
    /** @var \Illuminate\Http\Client\PendingRequest */
    protected $http;

    public function __construct(?Factory $factory = null)
    {
        $factory = $factory ?: new Factory();

        // echo Config::get('scoring.base_url'); die;
        $baseUrl = rtrim(Config::get('scoring.base_url'), '/');
        // echo $baseUrl; die;
        $timeout = (int)(Config::get('scoring.timeout'));
        $retries = (int)(Config::get('scoring.retries'));
        $delayMs = (int)(Config::get('scoring.retry_delay_ms'));

        // Build a PendingRequest we can reuse on every call
        $request = $factory
            ->baseUrl($baseUrl)
            ->timeout($timeout)
            ->retry($retries, $delayMs)
            ->acceptJson()    // Accept: application/json
            ->asJson();       // Content-Type: application/json

        // Default headers (you can add more via withHeaders on each call)
        $request = $request->withHeaders(Config::get('scoring.headers'));

        // Optional bearer token
        if (!empty($_ENV['API_TOKEN'])) {
            $request = $request->withToken($_ENV['API_TOKEN']);
        }

        $this->http = $request;
    }

    /** Merge extra headers for a single request */
    protected function withHeaders(array $headers)
    {
        return $this->http->withHeaders($headers);
    }

    /** Low-level helpers — all return decoded JSON (array) or throw on HTTP errors */
    protected function get(string $uri, array $query = [], array $headers = [])
    {
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->get($uri, $query)->throw()->object();
    }

    protected function post(string $uri, array $data = [], array $headers = [])
    {
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->post($uri, $data)->throw()->object();
    }

    protected function put(string $uri, array $data = [], array $headers = [])
    {
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->put($uri, $data)->throw()->object();
    }

    protected function patch(string $uri, array $data = [], array $headers = [])
    {
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->patch($uri, $data)->throw()->object();
    }

    protected function delete(string $uri, array $headers = [])
    {
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->delete($uri)->throw()->object();
    }

    /** Optional: GraphQL helper if/when they migrate */
    protected function graphql(string $endpoint, string $query, array $variables = [], array $headers = [])
    {
        $payload = ['query' => $query, 'variables' => $variables];
        $req = $headers ? $this->withHeaders($headers) : $this->http;
        return $req->post($endpoint, $payload)->throw()->object();
    }
}
