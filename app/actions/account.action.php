<?php
    Auth::$user->theme = $_POST['theme'];
    Auth::save_user();
    header('Location: /account');