<?php
    namespace App;

    class Request
    {
        public static function uri($remove = '', $uremove = '')
        {
            return str_replace($uremove, '', str_replace($remove, "", trim($_SERVER['REQUEST_URI'], '/')));
        }

        public static function method()
        {
            return $_SERVER['REQUEST_METHOD'];
        }
    }
