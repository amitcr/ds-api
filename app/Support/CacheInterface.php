<?php
namespace App\Support;

interface CacheInterface {
    public function get($key, $default = null);
    public function set($key, $value, $ttl = 60);
    public function delete($key);
}
