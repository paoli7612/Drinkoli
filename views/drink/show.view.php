<?php
    $slug = Request::uri('drinks/');
    $drink = Drink::find($database, $slug);
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<a class="w3-button w3-theme" href="/<?= Request::uri() ?>?delete">
    <i calss="fas fa-trash"></i>
    Remove Drink
</a>
<a clas="w3-button w3-theme" href="/<?= Request::uri() ?>?edit">
    <i calss="fas fa-edit"></i>
    Edit Drink
</a>
<br>

<h1><?= $drink->name ?></h1>

<?php include 'views/layouts/page_end.php' ?>
