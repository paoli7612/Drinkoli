<?php
    use App\models\Ingredient;

    $ingredients = Ingredient::all('ingredients', Ingredient::class);
?>

<div class="w3-panel">
    <h1>Ingredients</h1>
    <?php foreach ($ingredients as $ingredient): ?>
        <div class="w3-panel">
            <?php print_r($ingredient) ?>
        </div>        
    <?php endforeach; ?>
</div>
