<?php

    include 'core/Request.php';
    include 'core/Router.php';
    include 'core/Navbar.php';

    $r = new Router;
    
    $nav = new Navbar;
    $nav->add('', 'Home', 'fa fa-home');
    $nav->add('', 'Drinks', 'fa fa-glass-cheers');
    $nav->add('', 'Ingredients', 'fa fa-home');

    $r->get('', 'views/home.php');
    require $r->direct(Request::uri(), Request::method());



