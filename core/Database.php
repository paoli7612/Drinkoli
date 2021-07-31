<?php

    class Database {

        private $pdo;

        private $username;
        private $password;
        private $host;

        private function reset()
        {
            $this->pdo = new PDO("mysql:host=$this->host", $this->username, $this->password);
            $this->pdo->exec("CREATE DATABASE drinkoli; USE drinkoli");
        }

        public function __construct($username, $password, $host) {
            $this->username = $username;
            $this->password = $password;
            $this->host = $host;
            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=drinkoli", $username, $password);
            } catch (PDOException $exception) {
                if ($exception->getCode() == 1049)
                    $this->reset();
                else
                    die($exception->getMessage());
            }
        }

    }