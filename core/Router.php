<?php 

    class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $dest)
    {
        $this->routes['GET'][$uri] = $dest; 
    }

    public function direct($uri, $method)
    {
        return $this->routes[$method][$uri];
    }

    }