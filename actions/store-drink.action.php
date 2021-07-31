<?php

    include 'models/Drink.php';
    Drink::create($_POST['name']);
    header('Location: drinks');
