<?php
// Load configuration
require_once __DIR__ . '/../config/config.php';

// Autoload classes
spl_autoload_register(function ($className) {
    $file = __DIR__ . '//' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Initialize session
session_start();

// Set error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);