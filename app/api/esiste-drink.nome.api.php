<?php

    use App\Database;
use App\Models\Drink;

if (empty(Database::select_where('drinks', Drink::class, "`name` = '" . $_GET['name'] . "';")))
        echo 0;
    else echo 1;
