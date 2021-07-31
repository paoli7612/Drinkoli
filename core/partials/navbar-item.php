<a class="w3-btn w3-bar-item <?= (Request::uri() == $item->link) ? 'w3-white' : '' ?>" href="/<?= $item->link ?>">
    <?= $item->title ?>
    <i class="<?= $item->icon ?> fa-lg"></i>
</a>