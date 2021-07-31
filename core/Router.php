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
            return $this->routes[$method][$uri];
        }

    }