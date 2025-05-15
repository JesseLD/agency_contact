<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Config\Router;

require_once __DIR__ . '/../routes/web.php';

Router::dispatch();
