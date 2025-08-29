<?php
namespace App\Core;

class Config
{
    protected static $configs = [];

    public static function get($key, $default = null)
    {
        $parts = explode('.', $key);
        $file  = $parts[0];

        if (!isset(self::$configs[$file])) {
            $path = __DIR__ . "/../../config/{$file}.php";
            if (file_exists($path)) {
                self::$configs[$file] = require $path;
            } else {
                return $default;
            }
        }

        $config = self::$configs[$file];
        array_shift($parts);

        foreach ($parts as $part) {
            if (isset($config[$part])) {
                $config = $config[$part];
            } else {
                return $default;
            }
        }

        return $config;
    }
}
