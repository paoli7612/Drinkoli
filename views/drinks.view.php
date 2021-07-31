<?php $title = 'Drinks' ?>
<?php include 'layouts/page_start.php' ?>

<a href="/drinks?new"> Nuovo Drink </a>
<br>

<div class="w3-panel">
    <table class="w3-table-all">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (Drink::all($database) as $drink): ?>
            <tr>
                <td><?= $drink->name ?></td>
                <td><?= $drink->slug ?></td>
                <td>
                    <a href="<?= $drink->route() ?>">
                        Vedi
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include 'layouts/page_end.php' ?>