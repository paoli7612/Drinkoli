<?php

    class NavbarItem {
        public $link;
        public $title;
        public $icon;

        public function __construct($link, $title, $icon) {
            $this->link = $link;
            $this->title = $title;
            $this->icon = $icon;
        }

        public function show()
        {
            include 'partials/navbar-item.php';
        }
    };

    class Navbar {

        private static $items = [];

        public static function add($link, $title, $icon)
        {
            array_push(self::$items, new NavbarItem($link, $title, $icon));
        }

        public static function show()
        {   
            include "partials/navbar.php";
        }
    };