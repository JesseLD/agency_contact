<?php

use Dotenv\Dotenv;

session_start();


require_once __DIR__ . '/../vendor/autoload.php';

use Config\Router;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . '/../routes/web.php';

Router::dispatch();
