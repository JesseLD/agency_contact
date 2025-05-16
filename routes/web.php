<?php

namespace Routes;

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Middleware\Auth;
use Config\Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/login', [AuthController::class, 'login']);
Router::get('/register', [AuthController::class, 'register']);
Router::get('/auth', [HomeController::class, 'auth'])->middleware(Auth::class);