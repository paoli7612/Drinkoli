<?php

    Ingredient::create($_POST['name']);
    header('Location: ingredients');
