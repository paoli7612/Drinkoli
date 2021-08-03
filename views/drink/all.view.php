<?php
    $title = 'Drinks';
    
    include 'views/layouts/page_start.php';

    $tools = new ButtonList;
    $tools->add("/drinks?new", 'New Drink', 'fas fa-plus');
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
        <?php foreach (Drink::all() as $drink): ?>
            <tr class="w3-hover-theme" style="cursor: pointer;" onclick="window.location='<?= $drink->route() ?>'">
                <td><?= $drink->name ?></td>
                <td><?= $drink->slug ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include 'views/layouts/page_end.php' ?>