<?php


class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];


    public static function load($filename)
    {
        $router = new static;
        require $filename;

        return $router;

    }

    public function get($uri, $controllerPath)
    {
        $this->routes['GET'][$uri] = $controllerPath;
    }

    public function post($uri, $controllerPath)
    {
        $this->routes['POST'][$uri] = $controllerPath;
    }


    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])) {
            ;
            return $this->routes[$method][$uri];
        }

        throw new Exception('No page found - 404');
    }




}
