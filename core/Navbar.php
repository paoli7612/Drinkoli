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
    };

    class Navbar {

        private $items = [];

        public function add($link, $title, $icon)
        {
            array_push($this->items, new NavbarItem($link, $title, $icon));
        }

        public function show()
        {   
            foreach ($this->items as $item) {
                include 'partials/navbar-item.php';
            }
        }

    };