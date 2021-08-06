<?php
    use App\Auth;
    Auth::login($_POST['username'], $_POST['password']);
    header('Location: /');
