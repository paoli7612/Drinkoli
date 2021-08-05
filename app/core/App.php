<?php

    namespace App;

class App
{
    public static $config;
    public static $navbar;

    public static function init()
    {
        self::$config = require('config.php');
        self::$navbar = new ButtonList();
        Database::init();
    }

    public static function themes()
    {
        return ['red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'khaki', 'yellow', 'amber', 'orange', 'deep-orange', 'blue-grey', 'brown', 'grey', 'dark-grey', 'black'];
    }
}