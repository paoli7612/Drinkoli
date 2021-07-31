<?php 

    class Request
    {
        public static function uri($remove = '')
        {
            return str_replace($remove, "", trim($_SERVER['REQUEST_URI'], '/'));
        }

        public static function method()
        {
            return $_SERVER['REQUEST_METHOD'];
        }
    }