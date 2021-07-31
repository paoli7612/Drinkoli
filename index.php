<?php

    $config = require('config.php');

    include 'core/functions.php';
    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';
    include 'core/Database.php';

    include 'models/Drink.php';

    $database = new Database($config['database']);

    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');

    $router = new Router;
    $router->get('', 'home');
    $router->get('drinks', 'drink/all');
    $router->get('drinks?new', 'drink/new');
    $router->get('ingredients', 'ingredients');
    $router->get('reset', 'reset');

    foreach (Drink::all($database) as $drink) {
        $router->get($drink->route(), 'drink/show', $drink);
    }

    $router->post('drinks', 'store-drink');


    require $router->direct(Request::uri(), Request::method());



