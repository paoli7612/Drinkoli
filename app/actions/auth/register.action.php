<?php

    Auth::register($_POST['email'], $_POST['username'], $_POST['password']);
    header('Location: /');