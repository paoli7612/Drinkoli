<?php

    use App\core\Router;
    use App\models\Drink;

    Router::post('reset', 'reset.database');

    Router::get('', 'home');
    Drink::route();
    Router::get('ingredients', 'ingredient/all');
    Router::get('enter', 'enter');

    Router::get('settings', 'settings');
    Router::post('settings', 'settings/theme');
