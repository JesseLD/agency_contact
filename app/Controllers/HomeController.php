<?php


namespace App\Controllers;
class HomeController extends Controller
{
    public function index()
    {
        // Render the home page
        // echo "Welcome to the home page!";
        self::render('home/index');
    }
    public function auth()
    {
        echo "Welcome to the auth page!";
    }
}