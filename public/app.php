<?php
declare(strict_types=1);

// dev toggle - set to 0 in production
ini_set('display_errors', '1');
error_reporting(E_ALL);

// always JSON
header('Content-Type: application/json; charset=utf-8');

// bootstrap (autoload, env)
require_once __DIR__ . '/../bootstrap.php';

use Dotenv\Dotenv;
use App\Core\DB;

// Load .env (only once)
$dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->safeLoad();

DB::init();