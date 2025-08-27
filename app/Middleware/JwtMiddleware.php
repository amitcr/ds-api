<?php
namespace App\Middleware;

use App\Services\JwtService;
use App\Core\Response;

class JwtMiddleware implements MiddlewareInterface {
    public function handle($request) {
        $token = $request->bearerToken();
        if (!$token) {
            Response::json(['error' => 'Unauthorized'], 401);
        }

        $jwt = new JwtService();
        $payload = $jwt->validate($token);
        if ($payload === false) {
            Response::json(['error' => 'Invalid token'], 401);
        }

        // optionally attach to request object
        $request->user = $payload;
    }
}
