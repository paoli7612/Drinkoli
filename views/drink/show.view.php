<?php
    $slug = Request::uri('drinks/');
    $drink = Drink::find($slug);
    $drink->load();

    $tools = new ButtonList;
    $tools->add("/" . Request::uri() . "?delete", 'Remove Drink', 'fas fa-trash');
    $tools->add("/" . Request::uri() . "?edit", 'Edit Drink', 'fas fa-edit');
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<?php $tools->show('tools') ?>

<h1><?= $drink->name ?></h1>

<table class="w3-table-all">
    <?php foreach ($drink->ingredients as $ingredient): ?>
        <tr>
            <td><?php print_r($ingredient['name']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'views/layouts/page_end.php' ?>
