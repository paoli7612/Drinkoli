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

    $router = new Router;
    $router->get('sing', 'sing');
    $router->get('', 'home');
    $router->get('drinks', 'drink/all');
    $router->get('drinks?new', 'drink/new');
    $router->get('ingredients', 'ingredient/all');
    $router->get('ingredients?new', 'ingredient/new');
    $router->get('account', 'account');
    $router->get('reset', 'reset');

    $footer = new Footer;

    foreach (Drink::all() as $drink) {
        $router->get($drink->route(), 'drink/show');
        $router->get($drink->route() . '?delete', 'drink/delete');
        $router->get($drink->route() . '?edit', 'drink/edit');
        $router->post($drink->route() . '?delete', 'delete-drink');
        $router->post($drink->route(), 'drink-set-ingredients');
    }

    foreach (Ingredient::all() as $ingredient) {
        $router->get($ingredient->route(), 'ingredient/show', $ingredient);
    }

    $router->post('drinks', 'store-drink');
    $router->post('ingredients', 'store-ingredient');
    $router->post('logout', 'auth/logout');
    $router->post('account', 'account');

    require $router->direct(Request::uri(), Request::method());
} else {
    Navbar::add('sing-in', 'Sing-in', 'fa fa-sign-in-alt');
    Navbar::add('sing-up', 'Sing-up', 'fa fa-user-plus');

    $router = new Router;
    $router->redirect('', 'sing-in');
    $router->get('sing-in', 'auth/sing-in');
    $router->get('sing-up', 'auth/sing-up');
    $router->get('reset', 'reset');

    $router->post('sing-in', 'auth/login');
    $router->post('sing-up', 'auth/register');

    $footer = Footer::empty();
    require $router->direct(Request::uri(), Request::method());
}
