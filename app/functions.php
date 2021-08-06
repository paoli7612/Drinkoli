<?php

    namespace App\core;

    function view($name)
    {
        return "views/$name.view.php";
    }

    function action($name)
    {
        return "actions/$name.action.php";
    }
