<?php

    use App\core\Router;
    use App\models\Drink;

    Router::get('reset', 'cmd/reset');

    Router::get('', 'home');
    Drink::route();
    Router::get('ingredients', 'ingredient/all');
    Router::get('enter', 'enter');

    Router::get('settings', 'settings');
    Router::post('settings', 'settings/theme');
