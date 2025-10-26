<?php
// Load configuration
require_once __DIR__ . '/../config/config.php';

// Autoload classes (search common app subfolders)
spl_autoload_register(function ($className) {
    $normalized = str_replace(['\\', '_'], '/', $className) . '.php';
    $base = __DIR__;
    $candidates = [
        $base . '/' . $normalized,                    // app/Foo.php or namespaced
        $base . '/controllers/' . basename($normalized), // app/controllers/HomeController.php
        $base . '/models/' . basename($normalized),      // app/models/Model.php
        $base . '/views/' . basename($normalized),       // app/views/View.php
    ];
    foreach ($candidates as $file) {
        if (is_file($file)) {
            require_once $file;
            return true;
        }
    }
    return false;
});

// Initialize session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');