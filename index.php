<?php
    use App\App;
    use App\Auth;
    use App\ButtonList;
    use App\Router;

    include "vendor/autoload.php";

    App::init();

    if (Auth::$isLogin) {
        App::$navbar->add('', 'Home', 'fa fa-home');
        App::$navbar->add('drinks', 'Drinks', 'fa fa-cocktail');
        App::$navbar->add('ingredients', 'Ingredients', 'fa fa-boxes');
        App::$navbar->add('account', 'account', 'fa fa-user');
        Router::get('', 'home');
        Router::get('drinks', 'drink/all');
        Router::get('ingredients', 'ingredient/all');
        Router::get('account', 'account');
        Router::get('reset', 'reset');
        Router::get('drinks?new', 'drink/new');
        Router::get('ingredients?new', 'ingredient/new');
        Router::post('drinks', 'store-drink');
        Router::post('ingredients', 'store-ingredient');
        Router::post('logout', 'auth/logout');
        Router::post('account', 'account');

        foreach (Drink::all() as $drink) {
            Router::get($drink->route(), 'drink/show');
            Router::get($drink->route() . '?delete', 'drink/delete');
            Router::get($drink->route() . '?edit', 'drink/edit');
            Router::post($drink->route() . '?delete', 'drink/drink');
            Router::post($drink->route(), 'drink-set-ingredients');
        }

        foreach (Ingredient::all() as $ingredient) {
            Router::get($ingredient->route(), 'ingredient/show', $ingredient);
        }
    } else {
        App::$navbar->add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
        App::$navbar->add('sing-up', 'Sing-up', 'fa fa-user-plus');
        Router::redirect('', 'sing-in');
        Router::get('sing-in', 'auth/sing-in');
        Router::get('sing-up', 'auth/sing-up');
        Router::get('reset', 'reset');
        Router::post('sing-in', 'auth/login');
        Router::post('sing-up', 'auth/register');
    }

    include Router::direct();
