<?php
    $slug = Request::uri('ingredients/');
    $ingredient = Ingredient::find($slug);
?>

<?php $title = 'Drink / '. $ingredient->name ?>
<?php include 'views/layouts/page_start.php' ?>

<h1><?= $ingredient->name ?></h1>

<?php include 'views/layouts/page_end.php' ?>
