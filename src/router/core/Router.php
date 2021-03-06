<?php

class Router {

    protected $routes = [];

    /**
     * Undocumented function
     *
     * @return object
     */
    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes) {
        $this->routes = $routes;
    }

    public function redirect($uri) {
        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No route defined for this URI.");
        }
    }

};
