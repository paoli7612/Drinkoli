<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
    {
        return view('drinks', [
            'drinks' => Drink::all()
        ]);
    }
}
