<?php

    class Auth {

        public static $isLogin;
        private static $database;
        public static $user;
        
        public static function init($database)
        {
            session_start();
            Auth::$database = $database;
            if (Auth::$isLogin = array_key_exists('login_id', $_SESSION))
                Auth::$user = Auth::$database->select_where('users', 'User', " id=" . $_SESSION['login_id'] . ";")[0]; 
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

        public static function save_user()
        {
            $user = Auth::$user;

            print_r("
            UPDATE users 
            SET 
                theme='$user->theme',
                username='$user->username',
            WHERE
                `id` = '$user->id';
        ");
            Auth::$database->query("
                UPDATE users 
                SET 
                    theme='$user->theme',
                    username='$user->username'
                WHERE
                    `id` = '$user->id';
            ");
        }
    }