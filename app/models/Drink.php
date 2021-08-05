<?php
    class Drink {

        public $id;
        public $name;
        public $slug;

        public $ingredients;

        public static function create($name)
        {
            $slug = slug($name);
            Database::create("drinks", "`name`, `slug`", "'$name', '$slug'");
        }

        public static function delete($slug)
        {
            Database::delete('drinks', "`slug`='$slug'");
        }

        public static function all()
        {
            return Database::select_all('drinks', 'Drink');
        }

        public static function find($slug)
        {
            return Database::find('drinks', 'slug', $slug, 'Drink');
        }

        public function route()
        {
            return 'drinks/' . $this->slug;
        }

        public function load()
        {
            $this->ingredients = Database::query("SELECT * FROM ingredient_drink, ingredients WHERE drink_id=$this->id AND ingredient_id=ingredients.id");
        }

        public function add_ingredient($database, $ingredient_id)
        {
            Database::create('ingredient_drink', "`drink_id`, `ingredient_id`", "$this->id, $ingredient_id");
        }

        public function remove_ingredients($database)
        {
            Database::delete('ingredient_drink', "drink_id=$this->id");
        }
    }