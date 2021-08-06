<?php
    chdir('../');
    include 'bootstrap.php';

    App::init();
    Database::init();
    Auth::init();

    if (empty(Database::select_where('users', User::class, "`email` = '".$_GET['email']."';")))
        echo 0;
    else echo 1;

