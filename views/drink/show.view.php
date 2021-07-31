<?php
    $slug = Request::uri('drinks/');
    $drink = Drink::find($database, $slug);
?>

<?php $title = 'Drink' ?>
<?php include 'views/layouts/page_start.php' ?>

<h1><?= $drink->name ?></h1>

<?php include 'views/layouts/page_end.php' ?>
