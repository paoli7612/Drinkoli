<?php
    namespace App\Tools;

    function slug($text)
    {
        $divider = '-';
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        return $text;
    }

    function app_start($title)
    {
        require 'app/views/layouts/page_start.php';
    }
