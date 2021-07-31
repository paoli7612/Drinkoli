<?php

    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';

    
    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');

    $r = new Router;
    $r->get('', 'views/home.php');
    $r->get('drinks', 'views/drinks.php');
    $r->get('ingredients', 'views/ingredients.php');

    require $r->direct(Request::uri(), Request::method());



