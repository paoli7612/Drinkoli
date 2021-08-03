<div class="w3-panel w3-card-4 w3-theme w3-bar">
    <?php foreach (self::$items as $item): ?>
        <?php $item->show() ?>
    <?php endforeach; ?>

    <span class="w3-hide-medium w3-hide-large w3-bar-item w3-right">
        <?= $title ?>
    </span>

</div>
