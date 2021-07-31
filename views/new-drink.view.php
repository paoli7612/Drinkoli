<?php $title = 'New drink' ?>
<?php include 'layouts/page_start.php' ?>


<div class="w3-panel w3-green w3-round-large w3-card-4">
    <form class="w3-panel" action="/drinks" method="post">
        <div class="w3-threequarter w3-padding">
            <input class="w3-input w3-round-large w3-card-2" type="text" placeholder="Name" name="name">
        </div>
        <div class="w3-quarter w3-padding">
            <button type="submit" value="New Frink" class="w3-btn w3-block w3-white w3-round-large w3-card-2">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </form>
</div>

<?php include 'layouts/page_end.php' ?>