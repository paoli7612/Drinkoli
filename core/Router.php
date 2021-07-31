<?php 

    class Router {

        protected $routes = [
            'GET' => [],
            'POST' => [],
            'PUT' => [],
            'DELETE' => []
        ];

        private function add($uri, $method, $dest)
        {
            $this->routes[$method][$uri] = $dest;
        }

        public function get($uri, $dest)
        {
            $this->add($uri, 'GET', $dest);
        }

        public function post($uri, $dest)
        {
            $this->add($uri, 'POST', $dest);
        }

        public function put($uri, $dest)
        {
            $this->add($uri, 'PUT', $dest);
        }

        public function delete($uri, $dest)
        {
            $this->add($uri, 'DELETE', $dest);
        }

        public function direct($uri, $method)
        {
            $folder = $method == 'GET' ? 'views' : 'actions';
            return $folder . '/' . $this->routes[$method][$uri] . ($method == 'GET' ? '.view.php' : '.action.php');
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