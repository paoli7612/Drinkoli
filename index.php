<?php

    include 'core/Request.php';
    include 'core/Router.php';

    $nav = [
        [
            'link' => '/',
            'icon' => 'fa fa-home',
            'title' => 'Home'
        ],
        [
            'link' => '/contatti',
            'icon' => 'fa fa-contact',
            'title' => 'Contatti'
        ],
    ];

    $r = new Router;
    $r->get('', 'views/home.php');
    require $r->direct(Request::uri(), Request::method());



