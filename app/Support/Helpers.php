<?php
namespace App\Support;

class Helpers {
    public static function env($key, $default = null) {
        $v = getenv($key);
        return $v === false ? $default : $v;
    }

    // safe JSON decode
    public static function jsonDecode($s, $assoc = true) {
        $r = @json_decode($s, $assoc);
        return $r === null ? [] : $r;
    }
}
