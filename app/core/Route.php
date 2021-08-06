<?php

    namespace App\core;

    class Route
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

        public static function direct()
        {
            if (array_key_exists(Requests::uri(), self::$routes[Requests::method()])) {
                return view(self::$routes[Requests::method()][Requests::uri()]);
            } else {
                return view('404');
            }
        }
    }
