<?php

namespace App\Controllers;


abstract class Controller
{

   public static function render($view, $data =[]){
       extract($data);
       include_once __DIR__ . "/../../public/views/{$view}.php";
   }
}
