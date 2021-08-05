<?php $title = 'Sing in' ?>
<?php include 'app/views/layouts/page_start.php' ?>

<div class="w3-panel">
    
    <div class="w3-panel w3-green w3-card-4 w3-round-large">
        <div class="w3-panel">
            <form action="sing-in" method="post">
                <input name="username" class="w3-input w3-round-large w3-margin-bottom" type="text" placeholder="Username" require_onced autofocus>
                <input name="password" class="w3-input w3-round-large w3-margin-bottom" type="password" placeholder="Password">
                <input type="submit" value="Sing-in" class="w3-button w3-round-large w3-margin-bottom w3-right w3-white">
            </form>
        </div>
    </div>
</div>

<?php include 'views/layouts/page_end.php' ?>