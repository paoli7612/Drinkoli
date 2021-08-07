<!DOCTYPE html>
<html lang="en">
    <?php

use App\App;

include 'head.php' ?>
<body>
    <?php if (App::has_log()) : ?>
        <div class="w3-section w3-padding w3-yellow w3-display-container">
            <p><?= App::get_log() ?></p>
            <span class="w3-display-right" onclick="this.parentNode.remove()">
                <i class="fas fa-times-circle w3-margin"></i>
            </span>
        </div>
    <?php endif; ?>

    <?php include 'navbar.php' ?>
    <div class="w3-panel">