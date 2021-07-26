<?php

use App\Models\Drink;
use App\Models\Ingredient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientDrinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_drink', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Drink::class, 'drink_id');
            $table->foreignIdFor(Ingredient::class, 'ingredient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_drink');
    }
}
