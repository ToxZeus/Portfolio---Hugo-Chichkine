<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');

// Application configuration
// Allow overriding BASE_URL via environment (useful for GitHub Pages)
$__baseUrl = getenv('BASE_URL') ?: 'http://localhost:8000';
define('BASE_URL', rtrim($__baseUrl, '/'));
define('SITE_NAME', 'Hugo Chichkine - Portfolio');

// Language settings
define('DEFAULT_LANG', 'fr');
define('AVAILABLE_LANGUAGES', ['fr', 'en']);