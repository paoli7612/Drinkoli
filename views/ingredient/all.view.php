<?php $title = 'Ingredients' ?>
<?php include 'views/layouts/page_start.php' ?>

<a href="/ingredients?new"> Nuovo Ingredient </a>
<br>

<div class="w3-panel">
    <table class="w3-table-all w3-card-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (Ingredient::all($database) as $ingredient): ?>
            <tr class="w3-hover-theme" onclick="window.location='<?= $ingredient->route() ?>'">
                <td><?= $ingredient->name ?></td>
                <td><?= $ingredient->slug ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include 'views/layouts/page_end.php' ?>