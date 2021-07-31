<?php

    class Database {

        private $pdo;

        private $username;
        private $password;
        private $host;

        public function reset()
        {
            $this->pdo = new PDO("mysql:host=$this->host", $this->username, $this->password);
            $query = file_get_contents("database.sql");
            $statement = $this->pdo->prepare($query);
            $statement->execute();
        }

        public function __construct($config) {
            
            $this->username = $config['username'];
            $this->password = $config['password'];
            $this->host = $config['host'];
            $this->dbname = $config['dbname'];
            try {
                $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            } catch (PDOException $exception) {
                if ($exception->getCode() == 1049) // database non creato
                    $this->reset();
                else
                    die($exception->getMessage());
            }
        }

        public function query($query)
        {
            $s = $this->pdo->prepare($query);
            $s->execute();
            return $s->fetchAll();
        }

        public function select_all($table, $className)
        {
            $statement = $this->pdo->query("SELECT * FROM {$table};");
            $statement->setFetchMode(PDO::FETCH_CLASS, $className);
            return $statement->fetchAll();
        }

        public function find($table, $column, $value, $className)
        {
            $statement = $this->pdo->query("SELECT * FROM {$table} WHERE {$column}='{$value}';");
            $statement->setFetchMode(PDO::FETCH_CLASS, $className);
            return $statement->fetchAll();
        }

    }