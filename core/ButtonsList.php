<?php 

    class ButtonItem {
        
        public $link;
        public $title;
        public $icon;

        public function __construct($link, $title, $icon) {
            $this->link = $link;
            $this->title = $title;
            $this->icon = $icon;
        }

    }

    class ButtonList {
    
        private $items = [];

        public function add($link, $title, $icon)
        {
            array_push($this->items, new ButtonItem($link, $title, $icon));
        }

        public function show($t)
        {
            include 'partials/templates/' . $t . '.php';
        }

    }