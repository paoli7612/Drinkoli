<?php
    class Drink {

        public $id;
        public $name;
        public $slug;

        public $ingredients;

        public static function create($database, $name)
        {
            $slug = slug($name);
            Database::create("drinks", "`name`, `slug`", "'$name', '$slug'");
        }

        public static function delete($database, $slug)
        {
            $database->query("DELETE FROM `drinks` WHERE `slug`='$slug';");
        }

        public static function all()
        {
            return Database::select_all('drinks', 'Drink');
        }

        public static function find(Database $database, $slug)
        {
            return $database->find('drinks', 'slug' , $slug, 'Drink')[0];
        }

        public function route()
        {
            return 'drinks/' . $this->slug;
        }

        public function load($database)
        {
            $this->ingredients = $database->query("SELECT * FROM ingredient_drink, ingredients WHERE drink_id=$this->id AND ingredient_id=ingredients.id");
        }

        public function add_ingredient($database, $ingredient_id)
        {
            $database->create('ingredient_drink', "`drink_id`, `ingredient_id`", "$this->id, $ingredient_id");
        }

        public function remove_ingredients($database)
        {
            $database->delete('ingredient_drink', "drink_id=$this->id");
        }
    }