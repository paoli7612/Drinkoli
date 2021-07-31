<?php

    class Database {

        private $pdo;

        private $username;
        private $password;
        private $host;

        private function reset()
        {
            $this->pdo = new PDO("mysql:host=$this->host", $this->username, $this->password);
            $this->pdo->exec("CREATE DATABASE $this->dbname; USE drinkoli");
        }

        public function __construct($username, $password, $dbname, $host) {
            $this->username = $username;
            $this->password = $password;
            $this->host = $host;
            $this->dbname = $dbname;
            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            } catch (PDOException $exception) {
                if ($exception->getCode() == 1049)
                    $this->reset();
                else
                    die($exception->getMessage());
            }
        }

    }