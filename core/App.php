
<?php

    class App {

        public static $config;

        public static function init()
        {
            self::$config = require('config.php');
        }

        public static function themes()
        {
            return $themes = ['red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'khaki', 'yellow', 'amber', 'orange', 'deep-orange', 'blue-grey', 'brown', 'grey', 'dark-grey', 'black'];
        }

    }