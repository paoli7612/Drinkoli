<?php

    use App\App;
    use App\Auth;
    use App\Database;

    Auth::login($_POST['username'], $_POST['password']);

    header('Location: /');
