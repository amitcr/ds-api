<?php
namespace App\Services;

class JwtService
{
    private $secret;

    public function __construct()
    {
        $this->secret = getenv('JWT_SECRET') ?? 'change_me_in_prod';
    }

    /**
     * Generate a JWT token
     */
    public function generateToken(array $payload, int $ttlSeconds = 120): string
    {
        $header = ['alg' => 'HS256', 'typ' => 'JWT'];

        // Add issued-at & expiry
        $issuedAt = time();
        $payload['iat'] = $issuedAt;
        $payload['exp'] = $issuedAt + $ttlSeconds;

        $h = $this->b64u(json_encode($header));
        $p = $this->b64u(json_encode($payload));
        $s = $this->b64u(hash_hmac('sha256', "$h.$p", $this->secret, true));

        return "$h.$p.$s";
    }

    /**
     * Validate a token and return payload (or false if invalid)
     */
    public function validate(string $access_token)
    {
        $parts = explode('.', $access_token);
        if (count($parts) !== 3) return false;

        list($h, $p, $s) = $parts;
        $header  = json_decode($this->b64d($h), true);
        $payload = json_decode($this->b64d($p), true);

        if (!$header || !$payload) return false;
        if (($header['alg'] ?? '') !== 'HS256') return false;

        $sig = $this->b64u(hash_hmac('sha256', "$h.$p", $this->secret, true));
        if (!hash_equals($sig, $s)) return false;

        if (isset($payload['exp']) && time() >= $payload['exp']) return false;

        return $payload;
    }

    /**
     * Refresh token by generating a new one with same payload (new expiry)
     */
    public function refreshToken(string $access_token, int $ttlSeconds = 120)
    {
        $payload = $this->validate($access_token);
        if (!$payload) return false;

        // Remove old exp & iat before regenerating
        unset($payload['iat'], $payload['exp']);
        return $this->generateToken($payload, $ttlSeconds);
    }

    // Helpers
    private function b64d(string $s) { return base64_decode(strtr($s, '-_', '+/')); }
    private function b64u(string $s) { return rtrim(strtr(base64_encode($s), '+/', '-_'), '='); }
}
