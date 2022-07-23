<?php


class Router {

    public $routes;

    public static function load($filename)
    {
        $router = new static;
        $router->routes = require $filename;

        return $router;

    }


    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)) {
            ;
            return require $this->routes[$uri];
        }

        throw new Exception('No page found - 404');
    }



}
