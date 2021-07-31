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

        public function __construct($username, $password, $dbname, $host) {
            $this->username = $username;
            $this->password = $password;
            $this->host = $host;
            $this->dbname = $dbname;
            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
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
        }

        public function select_all($table)
        {
            $statement = $this->pdo->query("SELECT * FROM {$table};");
            $statement->setFetchMode(PDO::FETCH_CLASS, 'Drink');
            return $statement->fetchAll();
        }

        public function find($table, $column, $value)
        {
            $statement = $this->pdo->query("SELECT * FROM {$table} WHERE {$column}='{$value}';");
            $statement->setFetchMode(PDO::FETCH_CLASS, 'Drink');
            return $statement->fetchAll();
        }


    }