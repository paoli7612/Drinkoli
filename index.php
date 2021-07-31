<?php

    include 'core/Request.php';
    include 'core/Router.php';

    $r = new Router;
    $r->get('', 'views/home.php');
    require $r->direct(Request::uri(), Request::method());



