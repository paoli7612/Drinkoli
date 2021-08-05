<?php

use App\App;
use App\Auth;

    print_r(Auth::$user);
    App::init();
    Auth::$user->theme = $_POST['theme'];
    Auth::save_user();
    header('Location: /account');
