<header class="w3-panel w3-card-4 w3-green w3-bar">
    <?php foreach ($nav as $item): ?>
        <a class="w3-button w3-hover-white w3-bar-item" href="<?= $item['link'] ?>">
            <?= $item['title'] ?>
            <i class="<?= $item['icon'] ?> fa-lg"></i>
        </a>        
    <?php endforeach; ?>
</header>