<?php use App\core\Database;

?>




<form action="/cmd" method="GET">
    <div class="w3-panel">
        <h4>Database</h4>
        <input type="submit" name="action" value="reset" class="w3-button w3-card-2 w3-round-large">
        <input type="submit" name="action" value="show" class="w3-button w3-card-2 w3-round-large">
    </div>
</form>

<?php

    function h1($text)
    {
        echo "<h1>$text</h1>";
    }

    switch ($_GET['action']) {
        case '':
            break;
        case 'reset':
            Database::reset();
            h1('Database resettato');
            break;

        case 'show':
            Database::print();
            h1('Database attuale');
            break;
        
        default:
            h1('Comando non valido');
            break;
    }
?>