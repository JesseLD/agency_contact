<?php

namespace Config;

class Router
{

  protected static $routes = [];
  protected $method;
  protected $path;

  public static function addRoute($method, $path, $callback)
  {
    $route = new static();
    
    self::$routes[$method][$path] = [
      'callback' => $callback,
      'middleware' => null
    ];

    $route->method = $method;
    $route->path = $path;

    return $route;
  }

  public static function getRoute($method, $path)
  {
    foreach (self::$routes as $route) {
      if ($route['method'] === $method && $route['path'] === $path) {
        return $route;
      }
    }
    return null;
  }

  public static function get($path, $callback)
  {
    return self::addRoute('GET', $path, $callback);
  }

  public static function post($path, $callback)
  {

    return self::addRoute('POST', $path, $callback);
  }

  public function middleware($middleware)
  {
    self::$routes[$this->method][$this->path]['middleware'] = $middleware;
    return $this;
  }



  public static function dispatch()
  {
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    $route = self::$routes[$requestMethod][$requestUri] ?? null;

    if (!$route) {
      http_response_code(404);
      echo "404 - Página não encontrada";
      return;
    }

    if ($route['middleware']) {
      $middleware = new $route['middleware'];
      if (!$middleware->handle()) {
        http_response_code(403);
        echo "403 - Acesso negado";
        return;
      }
    }

    [$class, $method] = $route['callback'];
    call_user_func([new $class, $method]);
  }
}
