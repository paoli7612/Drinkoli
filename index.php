<?php

    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';

    
    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('drinks', 'Drinks', 'fa fa-cocktail');
    $nav->add('ingredients', 'Ingredients', 'fa fa-boxes');

    $r = new Router;
    $r->get('', 'home');
    $r->get('drinks', 'drinks');
    $r->get('drinks/new', 'new-drink');
    $r->get('ingredients', 'ingredients');

    require $r->direct(Request::uri(), Request::method());



