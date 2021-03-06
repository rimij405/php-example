<?php

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

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
    
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function redirect($uri, $requestType) {
        if(array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        } else {
            throw new Exception("No route defined for this URI and method.");
        }
    }

};
