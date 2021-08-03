<?php
    $title = 'Settings';
    include 'layouts/page_start.php';

    $tools = new ButtonList;
    $tools->add("/remove_account", 'Remove Drink', 'fas fa-trash');
    $tools->add("#logout", 'Logout', 'fas fa-sign-out-alt');
?>

<?php $tools->show('tools') ?>

<div class="w3-container w3-theme w3-padding w3-round-large w3-card-4 w3-margin-bottom">
    <label for="theme">Theme</label>
    <div class="w3-panel">
        <form action="account" method="post">
            <select onchange="cambia_tema(this.value)" name="theme" id="theme" class="w3-select w3-round-large w3-half">
                <?php foreach (App::themes() as $color) : ?>
                    <option value="<?= $color ?>" <?= (Auth::theme() == $color) ? 'selected' : '' ?>><?= $color ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" value="" class="w3-button w3-round-large w3-white w3-margin-left">
                Salva
            </button>
        </form>
    </div>
</div>

<form id="logout" action="/logout" method="post">
    <button class="w3-button w3-card-4 w3-round-large w3-theme" href="/logout" type="submit">
        Disconnetti
        <i class="fa fa-sign-out-alt"></i>
    </button>
</form>

<script>
    var derror = $('div#error')[0];
    var cambia_tema = function(text) {
        $('head #linktheme').attr('href', 'https://www.w3schools.com/lib/w3-theme-' + text + '.css')

        $.getJSON('/query/cambia_tema.php?theme=' + text).done(function(e) {});
    }
</script>

<?php include 'layouts/page_end.php' ?>