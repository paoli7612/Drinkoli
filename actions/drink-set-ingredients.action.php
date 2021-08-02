<?php

    $slug = Request::uri('drinks/', '?delete');
    $drink = Drink::find($database, $slug);
    print_r($drink);



