<?php
    Auth::login($_POST['username'], $_POST['password']);
    header('Location: /');
