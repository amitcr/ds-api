<?php
declare(strict_types=1);

// dev toggle
ini_set('display_errors', '1');
error_reporting(E_ALL);

// always JSON
header('Content-Type: application/json; charset=utf-8');

// bootstrap
require_once __DIR__ . '/app.php';

use App\Core\Router;
use App\Core\Request;

// build Request (if you have your Request class, Router will accept it)
$request = class_exists(\App\Core\Request::class) ? new \App\Core\Request() : null;

// init router (Router accepts Request|null)
$router = new Router($request);

// load routes (single file or multiple grouped files)
require_once __DIR__ . '/../app/routes.php';

// dispatch - router will echo/exit
$router->dispatch();
