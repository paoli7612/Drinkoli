<?php $title = 'Sing in' ?>
<?php include 'views/layouts/page_start.php' ?>

<div class="w3-panel w3-third">
    <div class="w3-panel w3-green w3-card-4 w3-round-large">
        <div class="w3-panel">
            <form action="login" method="post">
                <input name="nickname" class="w3-input w3-round-large w3-margin-bottom" type="text" placeholder="nickname" required autofocus>
                <input name="password" class="w3-input w3-round-large w3-margin-bottom" type="text" placeholder="password">
                <input type="submit" value="Login" class="w3-button w3-round-large w3-margin-bottom w3-right w3-white">
            </form>
        </div>
    </div>
</div>

<?php include 'views/layouts/page_end.php' ?>