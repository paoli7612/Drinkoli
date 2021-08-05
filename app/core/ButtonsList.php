<?php

    namespace App;

    class ButtonItem
    {
        public $link;
        public $title;
        public $icon;

        public function __construct($link, $title, $icon)
        {
            $this->link = $link;
            $this->title = $title;
            $this->icon = $icon;
        }

        public function get_icon()
        {
            return "<i class=\"$this->icon\"></i>";
        }
    }

    class ButtonList
    {
        private $items = [];

        public function add($link, $title, $icon)
        {
            array_push($this->items, new ButtonItem($link, $title, $icon));
        }

        public function show($template, $title='')
        {
            include 'partials/templates/' . $template . '.php';
        }
    }
