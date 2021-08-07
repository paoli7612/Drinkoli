<?php

    use App\models\Drink;

    use function App\core\slug;

    Drink::create($_POST['name'], slug($_POST['name']));

    header('Location: /drinks');
