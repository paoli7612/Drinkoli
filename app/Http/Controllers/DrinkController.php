<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
    {
        return view('drinks', [
            'drinks' => Drink::all()
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'string|required'
        ]);

        Drink::create([
            'name' => request('name'),
            'slug' => Str::slug(request('name'), '-')
        ]);

        $drink = Drink::all()->where('name', request('name'))->first();
        return redirect($drink->route);
    }
}
