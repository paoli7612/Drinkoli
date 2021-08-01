<?php

    class Auth {

        public static $isLogin;
        private static $database;
        
        public static function init($database)
        {
            session_start();
            Auth::$database = $database;
            Auth::$isLogin = array_key_exists('login_id', $_SESSION);
        }
    }