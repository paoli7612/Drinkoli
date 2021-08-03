<?php

    Drink::create($_POST['name']);
    header('Location: drinks');
