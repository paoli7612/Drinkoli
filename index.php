<?php
include 'bootstrap.php';

App::init();
Database::init();
Auth::init();

if (Auth::$isLogin) {
    Navbar::add('', 'Home', 'fa fa-home');
    Navbar::add('drinks', 'Drinks', 'fa fa-cocktail');
    Navbar::add('ingredients', 'Ingredients', 'fa fa-boxes');
    Navbar::add('account', 'account', 'fa fa-user');

    Router::get('sing', 'sing');
    Router::get('', 'home');
    Router::get('drinks', 'drink/all');
    Router::get('drinks?new', 'drink/new');
    Router::get('ingredients', 'ingredient/all');
    Router::get('ingredients?new', 'ingredient/new');
    Router::get('account', 'account');
    Router::get('reset', 'reset');

    foreach (Drink::all() as $drink) {
        Router::get($drink->route(), 'drink/show');
        Router::get($drink->route() . '?delete', 'drink/delete');
        Router::get($drink->route() . '?edit', 'drink/edit');
        Router::post($drink->route() . '?delete', 'delete-drink');
        Router::post($drink->route(), 'drink-set-ingredients');
    }

    foreach (Ingredient::all() as $ingredient) {
        Router::get($ingredient->route(), 'ingredient/show', $ingredient);
    }

    Router::post('drinks', 'store-drink');
    Router::post('ingredients', 'store-ingredient');
    Router::post('logout', 'auth/logout');
    Router::post('account', 'account');

    require Router::direct(Request::uri(), Request::method());
} else {
    Navbar::add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
    Navbar::add('sing-up', 'Sing-up', 'fa fa-user-plus');

    Router::redirect('', 'sing-in');
    Router::get('sing-in', 'auth/sing-in');
    Router::get('sing-up', 'auth/sing-up');
    Router::get('reset', 'reset');

    Router::post('sing-in', 'auth/login');
    Router::post('sing-up', 'auth/register');

    require Router::direct(Request::uri(), Request::method());
}
