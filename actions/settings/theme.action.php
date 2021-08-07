<?php

use App\App;

setcookie('theme', $_POST['color']);
    App::set_log('Impostato tema: ' . $_POST['color']);
    header('Location: /settings');
