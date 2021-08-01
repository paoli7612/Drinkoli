<?php $title = 'Settings' ?>
<?php include 'layouts/page_start.php' ?>

<div class="w3-panel w3-theme w3-padding w3-round-large w3-card-4">
    <label for="theme">Theme</label>
    <div class="w3-panel">
        <select onchange="cambia_tema(this.value)" name="theme" id="theme" class="w3-select w3-round-large">
            <?php foreach (App::themes() as $color): ?>
                <option value="<?= $color ?>" <?= (App::theme($database) == $color) ? 'selected' : '' ?> ><?= $color ?></option>                
            <?php endforeach; ?>
        </select>
    </div>
    
</div>

<script>
    var derror = $('div#error')[0];
    var cambia_tema = function(text) {
        $('head #linktheme').attr('href', 'https://www.w3schools.com/lib/w3-theme-' + text + '.css')
        
        $.getJSON('/query/cambia_tema.php?theme=' + text).done(function(e) {
        });
    }
</script>

<?php include 'layouts/page_end.php' ?>