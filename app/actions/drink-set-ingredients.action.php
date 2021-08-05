<?php
    print_r($_POST);
    $slug = Request::uri('drinks/', '?delete');
    $drink = Drink::find($slug);

    $drink->remove_ingredients($database);

    foreach ($_POST as $ingredient_id) {
        $drink->add_ingredient($database, $ingredient_id);
    }

    header('Location: /' . $drink->route() );



