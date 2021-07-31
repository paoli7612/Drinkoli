<?php
    $slug = Request::uri('ingredients/');
    $drink = Ingredient::find($database, 'ingredients', $slug);
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<h1><?= $drink->name ?></h1>

<?php include 'views/layouts/page_end.php' ?>
