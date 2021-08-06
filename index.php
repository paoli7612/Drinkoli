<?php
    use App\App;
    use App\Auth;
    use App\Router;

    use App\Models\Drink;

    include "vendor/autoload.php";

    App::init();

    Router::get('reset', 'reset');
    Router::get('db', 'database');
    Router::get('routes', 'routes');

    if (Auth::$isLogin) {
        App::$navbar->add('', 'Home', 'fa fa-home');
        App::$navbar->add('drinks', 'Drinks', 'fa fa-cocktail');
        App::$navbar->add('account', 'account', 'fa fa-user');

        Router::get('', 'home');
        Drink::routes();
        Router::get('account', 'account');
        Router::post('account', 'account');
    } else {
        App::$navbar->add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
        App::$navbar->add('sing-up', 'Sing-up', 'fa fa-user-plus');
        App::$navbar->add('info', 'Info', 'fas fa-info');

        Router::redirect('', 'sing-in');
        
        Router::get('sing-in', 'auth/sing-in');
        Router::get('sing-up', 'auth/sing-up');

        
        Router::post('sing-in', 'auth/login');
        Router::post('sing-up', 'auth/register');
    }
    
    include 'app/views/layouts/page_start.php';
    include Router::direct();
    include 'app/views/layouts/page_end.php';
