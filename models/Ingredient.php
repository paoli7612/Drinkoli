<?php
    class Ingredient {

        public $id;
        public $name;
        public $slug;

        public static function create($name)
        {
            $slug = slug($name);
            $database->query("INSERT INTO ingredients (`name`, `slug`) VALUES ('$name', '$slug');");
        }

        public static function all()
        {
            return Database::select_all('ingredients', 'Ingredient');
        }

        public static function find($table, $slug)
        {
            return Database::find($table, 'slug' , $slug, 'Ingredient')[0];
        }

        public function route()
        {
            return 'ingredients/' . $this->slug;
        }
    }