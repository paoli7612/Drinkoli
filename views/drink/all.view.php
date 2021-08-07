<?php
    use App\models\Drink;

    $drinks = Drink::all('drinks', Drink::class);
?>

<div class="w3-panel w3-theme w3-card-4 w3-round-large w3-right ">
    <form action="/drinks" method="POST">
        <input type="text" name="name" placeholder="Nome" class="w3-input w3-card-2 w3-round-large w3-section">
        <button type="submit" value="" class="w3-button w3-white w3-card-2 w3-round-large w3-margin-bottom w3-right">
            <i class="fas fa-plus"></i>
            Nuovo Drink
        </button>
    </form>
</div>


<div class="w3-panel">
    <table class="w3-table-all">
        <?php foreach ($drinks as $drink): ?>
            <tr>
                <td>
                    <?= $drink->name ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
