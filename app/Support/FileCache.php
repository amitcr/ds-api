<?php
namespace App\Support;

class FileCache implements CacheInterface {
    private $dir;
    public function __construct($dir = null) {
        $this->dir = $dir ?: sys_get_temp_dir() . '/api_cache';
        if (!is_dir($this->dir)) @mkdir($this->dir, 0755, true);
    }
    private function file($key) { return $this->dir . '/cache_' . md5($key); }
    public function get($key, $default = null) {
        $f = $this->file($key);
        if (!is_file($f)) return $default;
        $data = @unserialize(@file_get_contents($f));
        if (!is_array($data)) return $default;
        if ($data['expires'] !== 0 && $data['expires'] < time()) { @unlink($f); return $default; }
        return $data['value'];
    }
    public function set($key, $value, $ttl = 60) {
        $f = $this->file($key);
        $data = ['expires' => $ttl > 0 ? time() + $ttl : 0, 'value' => $value];
        return file_put_contents($f, serialize($data)) !== false;
    }
    public function delete($key) { $f = $this->file($key); if (is_file($f)) return unlink($f); return false; }
}
