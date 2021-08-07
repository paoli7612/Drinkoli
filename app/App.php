<?php
    namespace App;

use App\core\Request;
use App\core\Router;

class App
{
    public static $config;
    public static $navbar;
        
    public static function init()
    {
        self::$config = require('config.php');
    }

    public static function load()
    {
        if (Request::method() == 'GET') {
            include 'views/layout/page_start.php';
            include Router::direct();
            include 'views/layout/page_end.php';
        } else {
            include Router::direct();
        }
    }
        
    public static function themes()
    {
        return ['red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'khaki', 'yellow', 'amber', 'orange', 'deep-orange', 'blue-grey', 'brown', 'grey', 'dark-grey', 'black'];
    }
}
