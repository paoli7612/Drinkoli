<a class="w3-btn w3-bar-item <?= (Request::uri() == $this->link) ? 'w3-white' : '' ?>" href="/<?= $this->link ?>">
    <span class="w3-hide-small">
        <?= $this->title ?>
    </span>    
    <i class="<?= $this->icon ?> fa-lg"></i>
</a>