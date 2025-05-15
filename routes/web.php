<?php

namespace Routes;

use App\Controllers\HomeController;
use App\Middleware\Auth;
use Config\Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/auth', [HomeController::class, 'auth'])->middleware(Auth::class);