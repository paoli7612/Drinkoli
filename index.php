<?php

    $config = require('config.php');

    include 'core/functions.php';
    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';
    include 'core/Database.php';

    include 'models/Drink.php';
    include 'models/Ingredient.php';

    $database = new Database($config['database']);

    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');

    $router = new Router;
    $router->get('', 'home');
    $router->get('drinks', 'drink/all');
    $router->get('drinks?new', 'drink/new');
    $router->get('ingredients', 'ingredient/all');
    $router->get('ingredients?new', 'ingredient/new');
    $router->get('reset', 'reset');

    foreach (Drink::all($database) as $drink) {
        $router->get($drink->route(), 'drink/show', $drink);
    }

    foreach (Ingredient::all($database) as $ingredient) {
        $router->get($ingredient->route(), 'ingredient/show', $ingredient);
    }
    

    $router->post('drinks', 'store-drink');
    $router->post('ingredients', 'store-ingredient');

    require $router->direct(Request::uri(), Request::method());



