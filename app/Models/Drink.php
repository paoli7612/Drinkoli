<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function add(Ingredient $ingredient)
    {
        return $this->ingredients()->save($ingredient);
    }

    public function ingredients()
    {
        return $this->belongsToMany(
            Ingredient::class,
            'ingredient_drink',
            'drink_id',
            'ingredient_id'
        );
    }

    public function getRouteAttribute()
    {
        return '/drinks/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
