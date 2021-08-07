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

    function slug($text)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        return $text;
    }
