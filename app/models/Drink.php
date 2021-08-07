<?php

    namespace App\models;

use App\core\Database;
use App\core\Router;

class Drink extends Model
{
    public static function route()
    {
        Router::get('drinks', 'drink/all');
        Router::post('drinks', 'drink/store');
    }

    public static function create($name, $slug)
    {
        Database::create('drinks', ['name', 'slug'], [$name, $slug]);
    }
}
