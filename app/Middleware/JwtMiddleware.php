<?php
namespace App\Middleware;

use App\Services\JwtService;
use App\Core\Response;

class JwtMiddleware implements MiddlewareInterface {
    public function handle($request) {
        $access_token = $request->bearerToken();
        if (!$access_token) {
            Response::json(['error' => 'Unauthorized'], 401);
        }

        $jwt = new JwtService();
        $payload = $jwt->validate($access_token);
        if ($payload === false) {
            Response::json(['error' => 'Invalid token'], 401);
        }

        // optionally attach to request object
        $request->tokendata = $payload;
    }
}
