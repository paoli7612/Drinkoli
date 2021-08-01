<?php $title = 'Sing in' ?>
<?php include 'views/layouts/page_start.php' ?>

<div class="w3-panel w3-threequarter">
    <div class="w3-panel w3-green w3-card-4 w3-round-large">
        <div class="w3-panel">
            <form action="sing-up" method="post">
                <input name="email" class="w3-input w3-round-large w3-margin-bottom" type="email" placeholder="Email" require_onced autofocus>
                <input name="username" class="w3-input w3-round-large w3-margin-bottom" type="text" placeholder="Username" require_onced>
                <input name="password" class="w3-input w3-round-large w3-margin-bottom w3-third w3-margin-right" type="password" placeholder="Password">
                <input name="password2" class="w3-input w3-round-large w3-margin-bottom w3-third" type="password" placeholder="Ripeti">
                <input disabled type="submit" value="Sing-up" class="w3-button w3-round-large w3-margin-bottom w3-right w3-white">
            </form>
        </div>
    </div>
</div>

<?php include 'views/layouts/page_end.php' ?>