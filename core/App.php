
<?php

    class App {

        public static function themes()
        {
            return $themes = ['red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'khaki', 'yellow', 'amber', 'orange', 'deep-orange', 'blue-grey', 'brown', 'grey', 'dark-grey', 'black'];
        }

        public static function theme(Database $database)
        {
            return $database->query("SELECT * FROM options WHERE name='theme'")[0]['value'];
        }

    }