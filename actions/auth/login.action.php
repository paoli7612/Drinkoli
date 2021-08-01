<?php

    Auth::login($_POST['nickname'], $_POST['password']);
    header('Location: ');