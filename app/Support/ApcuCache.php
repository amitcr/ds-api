<?php
namespace App\Support;

class ApcuCache implements CacheInterface {
    public function get($key, $default = null) {
        if (!function_exists('apcu_fetch')) return $default;
        $success = false;
        $val = apcu_fetch($key, $success);
        return $success ? $val : $default;
    }
    public function set($key, $value, $ttl = 60) {
        if (!function_exists('apcu_store')) return false;
        return apcu_store($key, $value, $ttl);
    }
    public function delete($key) {
        if (!function_exists('apcu_delete')) return false;
        return apcu_delete($key);
    }
}
