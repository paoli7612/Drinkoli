
<div id="tools" class="w3-right">
    <?php foreach ($this->items as $item): ?>
        <a class="w3-button w3-theme w3-round-large w3-card-4" href="<?= $item->link ?>">
            <i class="<?= $item->icon ?>"></i>
            <?= $item->title ?>
        </a>
    <?php endforeach; ?>
</div>
