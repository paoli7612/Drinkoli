<?php

    class Auth {

        public static $isLogin;
        private static $database;
        private static $user;
        
        public static function init($database)
        {
            session_start();
            Auth::$database = $database;
            Auth::$isLogin = array_key_exists('login_id', $_SESSION);
        }

        public static function login($username, $password)
        {
            require 'models/User.php';
            $res = Auth::$database->select_where('users', 'User', " username='$username' AND  password='$password';");
            if (count($res) == 1)
            {
                Auth::$user = $res[0];
                $_SESSION['login_id'] = Auth::$user->id;
            }
        }
        
        public static function theme()
        {
            return Auth::$user->theme ?? 'green';
        }
    }