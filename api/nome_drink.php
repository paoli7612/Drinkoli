<?php

    // (get name of a drink)
    // 1 esiste gia
    // 0 non essite

use App\App;
use App\Database;

include "../vendor/autoload.php";
    
    App::init();

    if (empty(Database::select_where('drinks', Drink::class, "`name` = '".$_GET['name']."';")))
        echo 0;
    else echo 1;

