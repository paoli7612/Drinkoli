<?php

    Ingredient::create($database, $_POST['name']);
    header('Location: ingredients');
