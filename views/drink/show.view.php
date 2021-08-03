<?php
    $slug = Request::uri('drinks/');
    $drink = Drink::find($slug);
    $drink->load();
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<div id="tools" class="w3-right">
    <a class="w3-button w3-theme w3-round-large w3-card-4" href="/<?= Request::uri() ?>?delete">
        <i class="fas fa-trash"></i>
        Remove Drink
    </a>
    <a class="w3-button w3-theme w3-round-large w3-card-4" href="/<?= Request::uri() ?>?edit">
        <i class="fas fa-edit"></i>
        Edit Drink
    </a>
</div>

<h1><?= $drink->name ?></h1>

<table class="w3-table-all">
    <?php foreach ($drink->ingredients as $ingredient): ?>
        <tr>
            <td><?php print_r($ingredient['name']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'views/layouts/page_end.php' ?>
