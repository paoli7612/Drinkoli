<?php

    // (get name of a drink)
    // 1 esiste gia
    // 0 non essite

    $config = require_once '../config.php';

    include '../core/Database.php';
    include '../models/Drink.php';

    $database = new Database($config['database']);

    $theme = $_GET['theme'];

    $database->query("UPDATE options SET `value`='$theme' WHERE name='theme';");


    echo 'ok';