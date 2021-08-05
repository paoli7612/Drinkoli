<?php
    namespace App;

    class Auth
    {
        public static $isLogin;
        public static $user;
        
        public static function init()
        {
            session_start();
            if (Auth::$isLogin = array_key_exists('login_id', $_SESSION)) {
                Auth::$user = Database::select_where('users', 'User', " id=" . $_SESSION['login_id'] . ";")[0];
            }
        }

        public static function login($username, $password)
        {
            $res = Database::select_where('users', 'User', " username='$username' AND  password='$password';");
            if (count($res) == 1) {
                Auth::$user = $res[0];
                $_SESSION['login_id'] = Auth::$user->id;
            }
        }

        public static function register($email, $username, $password)
        {
            Database::create('users', "`email`, `username`, `password`", "'$email', '$username', '$password'");
            Auth::login($username, $password);
        }
        
        public static function theme()
        {
            return Auth::$user->theme ?? 'green';
        }

        public static function save_user()
        {
            $user = Auth::$user;

            Database::query("
                UPDATE users 
                SET 
                    theme='$user->theme',
                    username='$user->username'
                WHERE
                    `id` = '$user->id';
            ");
        }

        public static function img($size)
        {
            echo "<img class=\"w3-image w3-circle w3-card-4\" src=\"https://i.pravatar.cc/$size?u=" . self::$user->email . "\"></img>";
        }
    }
