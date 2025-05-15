<?php

namespace App\Middleware;

class Auth
{
    public function handle()
    {
        // Check if the user is authenticated
        // if (!isset($_SESSION['user'])) {
        //     // Redirect to the login page
        //     header('Location: /login');
        //     exit;
        // }
        return true;

        // Call the next middleware or controller
        
    }
}