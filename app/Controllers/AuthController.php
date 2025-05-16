<?php

namespace App\Controllers;

class AuthController extends Controller
{
    public function login()
    {
        // Render the login page
        self::render('auth/login');
    }

    public function register()
    {
        // Render the register page
        self::render('auth/register');
    }
}