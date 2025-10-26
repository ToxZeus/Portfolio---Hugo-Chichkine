<?php
class Router {
    private $routes = [];
    
    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }
    
    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }
    
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($requestUri, PHP_URL_PATH) ?: '/';
        
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            
            if (is_string($callback)) {
                list($controller, $action) = explode('@', $callback);
                $controller = new $controller();
                $controller->$action();
            } else {
                call_user_func($callback);
            }
        } else {
            // 404 handling
            header('HTTP/1.0 404 Not Found');
            echo '404 Not Found';
        }
    }
}