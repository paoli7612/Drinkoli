<?php

    namespace App\models;

use App\core\Router;

class Drink extends Model
{
    public static function route()
    {
        Router::get('drinks', 'drink/all');
        Router::post('drinks', 'drink/store');
    }
}
