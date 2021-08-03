<?php
    $title = 'Settings';
    include 'layouts/page_start.php';
?>

<div class="w3-twothird w3-panel">
    <div class="w3-container w3-theme w3-padding w3-round-large w3-card-4 w3-margin-bottom w3-display-container">
        <div class="w3-right w3-margin">
            <?php Auth::img(300) ?>
        </div>
        <div class="w3-display-left w3-margin-left">
            <h3><?= Auth::$user->email ?></h3>
            <h5><?= Auth::$user->username ?></h5>
        </div>
    </div>
</div>
<div class="w3-third w3-panel">
    <div class="w3-container w3-theme w3-round-large w3-card-4 w3-margin-bottom">
        <h1>Settings</h1>
        <div class="w3-panel">
            <form action="account" method="post">
                <label for="">Theme</label>
                <br>
                <select onchange="cambia_tema(this.value)" name="theme" id="theme" class="w3-select w3-round-large w3-half">
                    <?php foreach (App::themes() as $color) : ?>
                        <option value="<?= $color ?>" <?= (Auth::theme() == $color) ? 'selected' : '' ?>><?= $color ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" value="" class="w3-button w3-round-large w3-white w3-margin-left">
                    <i class="fas fa-save"></i>    
                    Save
                </button>
            </form>
        </div>
        <div class="w3-panel">
            <form action="account" method="post">
                <label for="">Change username</label>
                <br>
                <input type="text" name="" class="w3-select w3-round-large w3-half">
                <button disabled type="submit" value="" class="w3-button w3-round-large w3-white w3-margin-left" placeholder="new username">
                    <i class="fas fa-save"></i>    
                    Change
                </button>
            </form>
        </div>
    </div>
</div>

<form id="logout" action="/logout" method="post">
    <button class="w3-button w3-card-4 w3-round-large w3-theme w3-right" href="/logout" type="submit">
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