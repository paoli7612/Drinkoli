<?php
    $title = 'Ingredients';
    
    include 'views/layouts/page_start.php';

    $tools = new ButtonList;
    $tools->add("/ingredients?new", 'New Ingredient', 'fas fa-plus');
?>

<?php $tools->show('tools') ?>

<div class="w3-panel">
    <table class="w3-table-all w3-card-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (Ingredient::all() as $ingredient): ?>
            <tr class="w3-hover-theme" onclick="window.location='<?= $ingredient->route() ?>'">
                <td><?= $ingredient->name ?></td>
                <td><?= $ingredient->slug ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include 'views/layouts/page_end.php' ?>