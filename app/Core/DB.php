<?php
namespace App\Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Core\Config;

class DB {
    public static function init() {        

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => Config::get('database.connection') ?? 'mysql',
            'host'      => Config::get('database.host') ?? '127.0.0.1',
            'database'  => Config::get('database.database') ?? '',
            'username'  => Config::get('database.username') ?? '',
            'password'  => Config::get('database.password') ?? '',
            'charset'   => Config::get('database.charset') ?? 'utf8',
            'collation' => Config::get('database.collation') ?? 'utf8_unicode_ci',
            'prefix'    => Config::get('database.prefix') ?? '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
