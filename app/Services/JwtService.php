<?php
namespace App\Services;

class JwtService
{
    private $secret;

    public function __construct()
    {
        $this->secret = getenv('JWT_SECRET') ?: 'change_me_in_prod';
    }

    // Very lightweight validation (no libs). Return payload assoc array or false.
    public function validate($token)
    {
        $parts = explode('.', $token);
        if (count($parts) !== 3) return false;
        list($h, $p, $s) = $parts;
        $header = json_decode($this->b64d($h), true);
        $payload = json_decode($this->b64d($p), true);
        if (!$header || !$payload) return false;
        $algo = $header['alg'] ?? 'HS256';
        if ($algo !== 'HS256') return false;
        $sig = $this->b64u(hash_hmac('sha256', "$h.$p", $this->secret, true));
        if (!hash_equals($sig, $s)) return false;
        if (isset($payload['exp']) && time() >= $payload['exp']) return false;
        return $payload;
    }

    // helper
    private function b64d($s) { return base64_decode(strtr($s, '-_', '+/')); }
    private function b64u($s) { return rtrim(strtr(base64_encode($s), '+/', '-_'), '='); }
}
