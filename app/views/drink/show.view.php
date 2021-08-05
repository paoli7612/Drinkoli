<?php

    use App\ButtonList;
    use App\Models\Drink;
    use App\Request;

    $slug = Request::uri('drinks/');
    $drink = Drink::find($slug);
    $drink->load();

    $tools = new ButtonList;
    $tools->add("/" . Request::uri() . "?delete", 'Remove Drink', 'fas fa-trash');
    $tools->add("/" . Request::uri() . "?edit", 'Edit Drink', 'fas fa-edit');
?>

<?php $tools->show('tools') ?>

<div class="w3-panel w3-theme-l2 w3-card-4 w3-round-large">
    <h1 class="w3-center"><?= $drink->name ?></h1>
    <ul>
        <?php foreach ($drink->ingredients as $ingredient): ?>
            <li><?php print_r($ingredient['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</div>


