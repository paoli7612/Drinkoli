<?php

    class Database {

        private static $pdo;
        
        private static $config;

        public static function reset()
        {
            $config = self::$config;
            Database::$pdo = new PDO("mysql:host=" . $config['host'], $config['username'], $config['password']);
            $query = file_get_contents("database.sql");
            self::query($query);
        }

        public static function init($config) {
            
            Database::$config = $config;

            try {
                self::$pdo = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['username'], $config['password']);
            } catch (PDOException $exception) {
                if ($exception->getCode() == 1049) // database non creato
                    self::reset();
                else
                    die($exception->getMessage());
            }
        }

        public static function query($query)
        {
            $s = self::$pdo->prepare($query);
            $s->execute();
            return $s->fetchAll();
        }

        public static function select_all($table, $className)
        {
            $statement = self::$pdo->query("SELECT * FROM {$table};");
            $statement->setFetchMode(PDO::FETCH_CLASS, $className);
            return $statement->fetchAll();
        }

        public static function select_where($table, $className, $args)
        {
            $statement = self::$pdo->query("SELECT * FROM {$table} WHERE $args;");
            $statement->setFetchMode(PDO::FETCH_CLASS, $className);
            return $statement->fetchAll();
        }

        public static function find($table, $column, $value, $className)
        {
            $statement = self::$pdo->query("SELECT * FROM {$table} WHERE {$column}='{$value}';");
            $statement->setFetchMode(PDO::FETCH_CLASS, $className);
            return $statement->fetchAll();
        }

        public function create($table, $columns, $values)
        {
            $this->query("INSERT INTO $table ($columns) VALUES ($values);");
        }

        public function delete($table, $where)
        {
            $this->query("DELETE FROM $table WHERE $where;");
        }

    }