<div class="w3-panel w3-card-4 w3-theme w3-bar">
    <?php foreach ($this->items as $item): ?>
        <a class="w3-btn w3-bar-item <?= (Request::uri() == $item->link) ? 'w3-white' : '' ?>" href="/<?= $item->link ?>">
            <span class="w3-hide-small">
                <?= $item->title ?>
            </span>    
            <i class="<?= $item->icon ?> fa-lg"></i>
        </a>
    <?php endforeach; ?>

    <span class="w3-hide-medium w3-hide-large w3-bar-item w3-right">
        <?= $title ?>
    </span>
</div>
