<?php

    Drink::create($database, $_POST['name']);
    header('Location: drinks');
