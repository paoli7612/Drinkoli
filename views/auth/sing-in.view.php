<?php $title = 'Sing in' ?>
<?php include 'views/layouts/page_start.php' ?>

<div class="w3-panel w3-third">
    <div class="w3-panel w3-green w3-card-4 w3-round-large">
        <div class="w3-panel">
            <form action="login" method="post">
                <input class="w3-input w3-round-large" type="text" placeholder="nickname" required autofocus>
                <input class="w3-input w3-round-large" type="text" placeholder="password" required autofocus>
            </form>
        </div>
    </div>
</div>

<?php include 'views/layouts/page_end.php' ?>