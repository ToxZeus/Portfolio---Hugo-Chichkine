<?php
class View {
    public static function render($view, $data = []) {
        // Extract data to make variables available in view
        extract($data);
        
        // Load header
        require_once __DIR__ . '/templates/header.php';
        
        // Load view file
        require_once __DIR__ . '/templates/' . $view . '.php';
        
        // Load footer
        require_once __DIR__ . '/templates/footer.php';
    }
}