<?php
namespace App\Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

class DB {
    public static function init() {
        // Load .env (only once)
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
        $dotenv->safeLoad();

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => $_ENV['DB_CONNECTION'] ?? 'mysql',
            'host'      => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'database'  => $_ENV['DB_DATABASE'] ?? '',
            'username'  => $_ENV['DB_USERNAME'] ?? '',
            'password'  => $_ENV['DB_PASSWORD'] ?? '',
            'charset'   => $_ENV['DB_CHARSET'] ?? 'utf8',
            'collation' => $_ENV['DB_COLLATION'] ?? 'utf8_unicode_ci',
            'prefix'    => $_ENV['DB_PREFIX'] ?? '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
