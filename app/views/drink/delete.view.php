<?php
    use App\Models\Drink;
    use App\Request;

    $slug = Request::uri('drinks/', '?delete');
    $drink = Drink::find($slug);
?>

<div class="w3-panel w3-theme-l2 w3-round-large w3-card-4">
    <div class="w3-panel">
        <p>
            Are you sure to delete this element (<b><?=$drink->name?></b>) from Media? 
        </p>
        <form action="/<?= Request::uri() ?>" method="post" class="w3-right">
            <button type="submit" class="w3-button w3-card-4 w3-round-large w3-white">
                <i class="fas fa-trash"></i>
                Elimina
            </button>
            <a href="/drinks/<?= $drink->slug ?>" class="w3-button w3-card-4 w3-round-large w3-white">
                <i class="fas fa-undo-alt"></i>
                Annulla    
            </a>
        </form>
    </div>
</div>

