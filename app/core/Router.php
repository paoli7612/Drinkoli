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
            if (array_key_exists(Request::uri(), self::$routes[Request::method()])) {
                if (Request::method() == 'GET') {
                    return view(self::$routes[Request::method()][Request::uri()]);
                } else {
                    return action(self::$routes[Request::method()][Request::uri()]);
                }
            } else {
                return view('404');
            }
        }
    }
