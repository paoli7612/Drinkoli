<?php 

    class Router {

        protected static $redir = [];

        protected static $routes = [
            'GET' => [],
            'POST' => [],
            'PUT' => [],
            'DELETE' => [],
        ];

        private static function add($uri, $method, $dest)
        {
            self::$routes[$method][$uri] = $dest;
        }

        public static function get($uri, $dest)
        {
            self::add($uri, 'GET', $dest);
        }

        public static function post($uri, $dest)
        {
            self::add($uri, 'POST', $dest);
        }

        public static function put($uri, $dest)
        {
            self::add($uri, 'PUT', $dest);
        }

        public static function delete($uri, $dest)
        {
            self::add($uri, 'DELETE', $dest);
        }

        public static function direct($uri, $method)
        {
            if (array_key_exists($uri, self::$redir))
                header('Location: ' . self::$redir[$uri]);

            $folder = $method == 'GET' ? 'views' : 'actions';
            return $folder . '/' . self::$routes[$method][$uri] . ($method == 'GET' ? '.view.php' : '.action.php');
        }

        public static function redirect($uri, $dest)
        {
            self::$redir[$uri] = $dest;
        }

        public function print()
        {
            echo '<table class="w3-table-all">';
            foreach ($this->routes as $method => $routes) {
                echo '<thead><tr><th>' . $method . '</th></tr>';
                echo '<tbody>';
                foreach ($routes as $route => $dest) {
                    echo '<tr>';
                    echo '<td>' . $route . '</td>';
                    echo '<td>' . $dest . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
            }
            echo '<table class="">';
        }
    }