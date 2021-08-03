<?php
    $slug = Request::uri('drinks/', '?edit');
    $drink = Drink::find($slug);
    $drink->load();
?>

<?php $title = 'Drink / '. $drink->name ?>
<?php include 'views/layouts/page_start.php' ?>

<h1><?= $drink->name ?></h1>

<div class="w3-hide">
    <div class="w3-panel" id="ingredient">
        <button type="button" onclick="rimuovi_ingrediente(this.parentNode)" class="w3-circle w3-button w3-white w3-card-2 w3-margin-left" onclick="aggiungi_ingrediente()">
            <i class="fa fa-trash"></i>
        </button>
        <select class="w3-half w3-select w3-round-large w3-margin-bottom w3-card-2">
            <option value="" selected disabled> --- </option>
            <?php foreach (Ingredient::all($database) as $ingredient): ?>
                <option value="<?= $ingredient->id ?>"><?= $ingredient->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<div class="w3-panel w3-theme w3-round-large w3-card-4">
    <form action="/drinks/<?= $drink->slug ?>" method="post">
        <div class="w3-panel" id="ingredients">
            <button type="button" class="w3-circle w3-button w3-white w3-card-2" onclick="aggiungi_ingrediente()">
                <i class="fa fa-plus"></i>
            </button>
            <button type="submi" class="w3-round-large w3-button w3-right w3-white w3-card-2">
                    Salva
                    <i class="fas fa-save"></i>
            </button>
        </div>
    </form>
</div>


<script>

    var tot = 0;

    var aggiungi_ingrediente = function (id) {
        console.log(id);
        tot++;
        var clone = $('#ingredient').clone();
        clone.children()[1].name = tot;
        clone.children()[1].value=id;
        $('#ingredients').append(clone);
    };

    var rimuovi_ingrediente = function (div) {
        div.remove();
        tot--;
    }
    
    <?php foreach ($drink->ingredients as $ingredient): ?>
        aggiungi_ingrediente(<?= $ingredient['ingredient_id'] ?>);
    <?php endforeach; ?>
    
</script>

    
<?php include 'views/layouts/page_end.php' ?>
