<?php

    include 'core/functions.php';
    include 'core/App.php';
    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';
    include 'core/Footer.php';
    include 'core/Database.php';
    include 'core/Auth.php';


    $config = require('config.php');
    $database = new Database($config['database']);
    $auth = new Auth($database);

    if (! Auth::$isLogin)
    {
        $nav = new Navbar;
        $nav->add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
        $nav->add('sing-up', 'Sing-up', 'fa fa-user-plus');

        $router = new Router;
        $router->get('sing-in', 'auth/sing-in');
        $router->get('sing-up', 'auth/sing-up');

        $footer = new Footer;

        require $router->direct(Request::uri(), Request::method());
        die();
    }

    include 'models/Drink.php';
    include 'models/Ingredient.php';

    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');
    $nav->add('settings', 'Settings', 'fa fa-cog');

    $router = new Router;

    $router->get('sing', 'sing');

    $router->get('', 'home');
    $router->get('drinks', 'drink/all');
    $router->get('drinks?new', 'drink/new');
    $router->get('ingredients', 'ingredient/all');
    $router->get('ingredients?new', 'ingredient/new');
    $router->get('settings', 'settings');
    $router->get('reset', 'reset');


    foreach (Drink::all($database) as $drink) {
        $router->get($drink->route(), 'drink/show');
        $router->get($drink->route() . '?delete', 'drink/delete');
        $router->post($drink->route() . '?delete', 'delete-drink');
    }

    foreach (Ingredient::all($database) as $ingredient) {
        $router->get($ingredient->route(), 'ingredient/show', $ingredient);
    }
    
    $router->post('drinks', 'store-drink');
    $router->post('ingredients', 'store-ingredient');

    require $router->direct(Request::uri(), Request::method());

    



