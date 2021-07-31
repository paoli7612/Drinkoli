<?php

    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';
    include 'core/Database.php';

    
    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');

    $router = new Router;
    $router->get('', 'home');
    $router->get('drinks', 'drinks');
    $router->get('drinks?new', 'new-drink');
    $router->get('ingredients', 'ingredients');
    $router->post('drinks', 'store-drink');

    $database = new Database('root', '', '127.0.0.1');


    require $router->direct(Request::uri(), Request::method());



