<?php

    // (get name of a drink)
    // 1 esiste gia
    // 0 non essite

    $config = require_once '../config.php';
    chdir('../');
    include 'bootstrap.php';

    App::init();
    Database::init();
    Auth::init();

    if (empty(Database::select_where('drinks', 'Drink', "`name` = '".$_GET['name']."';")))
        echo 0;
    else echo 1;

