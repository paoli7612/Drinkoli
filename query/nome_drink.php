<?php
    include '../core/Database.php';
    include '../models/Drink.php';

    $database = new Database('root', '', 'my_tomaoli', '127.0.0.1');

    $result = $database->query("SELECT id FROM drinks WHERE name = '" . $_GET['name'] . "';");

    if (count($result) > 0)
        echo 1;
    else
        echo 0;

