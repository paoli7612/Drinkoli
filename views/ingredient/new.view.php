<?php $title = 'New ingredient' ?>
<?php include 'views/layouts/page_start.php' ?>

<div class="w3-panel w3-theme w3-round-large w3-card-4">
    <form class="w3-panel" action="/ingredients" method="post">
        <div class="w3-row">
            <div class="w3-threequarter w3-padding">
                <input autofocus onkeyup="nome_drink(this.value)" class="w3-input w3-round-large w3-card-2" type="text" placeholder="Name" name="name">
            </div>
            <div class="w3-quarter w3-padding">
                <button type="submit" value="New Frink" class="w3-btn w3-block w3-white w3-round-large w3-card-2">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div id="error" class="w3-panel w3-red w3-hide w3-round-large w3-card-4">
            <p>Drink gia presente</p>
        </div>
    </form>
</div>

<script>
    var derror = $('div#error')[0];
    var nome_drink = function(text) {
        $.getJSON('/query/nome_ingredient.php?name=' + text).done(function(e) {
            if (e == 1) {
                console.log("no");
                derror.classList.replace('w3-hide', 'w3-show');
                $('form').find(':submit').prop("disabled", true);
            } else {
                console.log("si");
                derror.classList.replace('w3-show', 'w3-hide');
                $('form').find(':submit').prop("disabled", false);
            }
        });
    }
</script>

<?php include 'views/layouts/page_end.php' ?>
