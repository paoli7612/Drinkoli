<?php
    class Ingredient {

        public $id;
        public $name;
        public $slug;

        public static function create($database, $name)
        {
            $slug = slug($name);
            $database->query("INSERT INTO ingredients (`name`, `slug`) VALUES ('$name', '$slug');");
        }

        public static function all(Database $database)
        {
            return $database->select_all('ingredients', 'Ingredient');
        }

        public static function find(Database $database, $table, $slug)
        {
            return $database->find($table, 'slug' , $slug, 'Ingredient')[0];
        }

        public function route()
        {
            return 'ingredients/' . $this->slug;
        }
    }