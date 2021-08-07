<?php

use App\App;

?>

<div class="w3-panel w3-card-4 w3-theme w3-card-4 w3-round-large w3-padding-16 w3-twothird">
    <form action="/settings" method="post">
        <select name="color" id="" class="w3-select w3-card-2 w3-round-large w3-white w3-half w3-margin-right" onchange="cambia_tema(this.value)">
            <?php foreach (App::themes() as $color): ?>
                <option value="<?=$color?>"><?= $color ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="w3-button w3-white w3-card-2 w3-round-large">
            <i class="fas fa-save"></i>
            Salva
        </button>
    </form>
</div>

<div class="w3-panel w3-card-4 w3-theme w3-card-4 w3-round-large w3-padding-16 w3-twothird">
    <form action="/reset" method="POST">
        <button type="submit" class="w3-button w3-white w3-card-2 w3-round-large" >
                <i class="fas fa-database"></i>
            Reset Database
        </button>
    </form>
</div>
<script>

    var cambia_tema = function (color) {
        $('#theme_link').first().prop('href', "https://www.w3schools.com/lib/w3-theme-" + color + ".css")
    }

</script>