<?php

use App\core\Route;

    Route::get('', 'home');
    Route::get('drinks', 'drink/all');
    Route::get('ingredients', 'ingredient/all');
    Route::get('enter', 'enter');
    Route::get('settings', 'settings');
