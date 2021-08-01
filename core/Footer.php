<?php

    class Footer {

        private $on;

        public function __construct($on = true) {
            $this->on = $on;
        }

        public function show()
        {
            if ($this->on)
                include 'partials/footer.php';
        }

        public static function empty()
        {
            return new static(false);
        }

    }