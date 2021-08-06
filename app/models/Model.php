<?php

    namespace App\models;

    use App\core\Database;

    abstract class Model
    {
        public static function all($table, $class)
        {
            return Database::select($table, $class);
        }
    }
