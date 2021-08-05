<?php
    class Ingredient {

        public $id;
        public $name;
        public $slug;

        public static function create($name)
        {
            $slug = slug($name);
            Database::create('ingredients', "`name`, `slug`", "'$name', '$slug'");
        }

        public static function all()
        {
            return Database::select_all('ingredients', 'Ingredient');
        }

        public static function find($slug)
        {
            return Database::find('ingredients', 'slug' , $slug, 'Ingredient');
        }

        public function route()
        {
            return 'ingredients/' . $this->slug;
        }
    }