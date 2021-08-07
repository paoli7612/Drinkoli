<?php

namespace App\core;

    class Request
    {
        public static function method()
        {
            return $_SERVER['REQUEST_METHOD'];
        }

        public static function uri($index = -1)
        {
            $uri = trim(strtok($_SERVER["REQUEST_URI"], '?'), '/');
            $items = explode('/', $uri);
            return array_key_exists($index, $items) ? $items[$index] : $uri;
        }
    }
