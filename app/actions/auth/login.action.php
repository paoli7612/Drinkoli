<?php

    echo 'asd';

    use App\App;
    use App\Auth;
    use App\Database;

    App::init();
    Database::init();

    Auth::login($_POST['username'], $_POST['password']);
    header('Location: /');
