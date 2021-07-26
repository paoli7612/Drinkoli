<?php

namespace Database\Seeders;

use App\Models\Drink;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tommaso Paoli',
            'email' => 'admin@root',
            'password' => Hash::make('asdasdasd')
        ]);

        Ingredient::create(['name' => 'Vermuth']);
        Ingredient::create(['name' => 'Rum']);
        Ingredient::create(['name' => 'Soda']);
        Ingredient::create(['name' => 'Aperol']);
        Ingredient::create(['name' => 'Prosecco']);
        Ingredient::create(['name' => 'Selz']);

        Drink::create(['name' => 'Aperol Spritz', 'slug' => 'aperol-spritz']);
        Drink::create(['name' => 'Campari Spritz', 'slug' => 'campari-spritz']);

        $aperol = Drink::all()->where('name', 'Aperol Spritz')->first();
        $aperol->add(Ingredient::all()->where('name', 'Aperol')->first());
        $aperol->save();
    }
}
