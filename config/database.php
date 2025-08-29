<?php
return [
    'connection' => getenv('DB_CONNECTION') ?? 'mysql',
    'host'  => getenv('DB_HOST') ?? '127.0.0.1',
    'port'  => getenv('DB_PORT') ?? '3306',
    'database' => getenv('DB_DATABASE') ?? '',
    'username' => getenv('DB_USERNAME') ?? '',
    'password' => getenv('DB_PASSWORD') ?? '',
    'prefix' => getenv('DB_PREFIX') ?? '',
    'charset' => getenv('DB_CHARSET') ?? '',
    'collation' => getenv('DB_COLLATION') ?? '',
];
