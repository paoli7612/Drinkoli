<?php
    $slug = Request::uri('drinks/', '?delete');
    $drink = Drink::find($slug);
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<form action="/<?= Request::uri() ?>" method="post">
    <input type="submit" value="Elimina">
</form>

<h1><?= $drink->name ?></h1>

<?php include 'views/layouts/page_end.php' ?>
