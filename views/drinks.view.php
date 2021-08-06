<?php
    use App\models\Drink;

    $drinks = Drink::all('drinks', Drink::class);
?>

<div class="w3-panel">
    <h1>Drinks</h1>
    <?php foreach ($drinks as $drink): ?>
        <div class="w3-panel">
            <?php print_r($drink) ?>
        </div>        
    <?php endforeach; ?>
</div>
