<?php
    use App\App;
    use App\Auth;
use App\Models\Drink;
use App\Router;

    include "vendor/autoload.php";

    App::init();

    if (Auth::$isLogin) {
        App::$navbar->add('', 'Home', 'fa fa-home');
        App::$navbar->add('drinks', 'Drinks', 'fa fa-cocktail');
        App::$navbar->add('account', 'account', 'fa fa-user');

        Router::get('', 'home');
        Drink::routes();
        Router::get('account', 'account');
    } else {
        App::$navbar->add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
        App::$navbar->add('sing-up', 'Sing-up', 'fa fa-user-plus');

        Router::redirect('', 'sing-in');
        
        Router::get('sing-in', 'auth/sing-in');
        Router::get('sing-up', 'auth/sing-up');

        
        Router::post('sing-in', 'auth/login');
        Router::post('sing-up', 'auth/register');
    }

    Router::get('reset', 'reset');
    Router::get('db', 'database');
    Router::get('routes', 'routes');
    
    include 'app/views/layouts/page_start.php';
    include Router::direct();
    include 'layouts/page_end.php';
