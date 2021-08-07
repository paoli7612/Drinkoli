<?php

    namespace App\core;

    class Router
    {
        private static $routes = [
            'GET' => [],
            'POST' => []
        ];

        private static function add($uri, $method, $dest)
        {
            self::$routes[$method][$uri] = $dest;
        }

        public static function get($uri, $dest)
        {
            self::add($uri, 'GET', $dest);
        }

        public static function post($uri, $dest)
        {
            self::add($uri, 'POST', $dest);
        }

        public static function direct()
        {
            print_r(self::$routes);
            if (array_key_exists(Requests::uri(), self::$routes[Requests::method()])) {
                return view(self::$routes[Requests::method()][Requests::uri()]);
            } else {
                return view('404');
            }
        }
    }
