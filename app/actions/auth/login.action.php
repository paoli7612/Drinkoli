<?php

    use App\App;
    use App\Auth;
    App::init();
    Auth::login($_POST['username'], $_POST['password']);

    header('Location: /');
