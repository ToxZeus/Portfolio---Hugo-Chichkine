<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');

// Application configuration
// Prefer environment variable when available (e.g., in CI)
$envBaseUrl = getenv('BASE_URL');
define('BASE_URL', $envBaseUrl !== false && $envBaseUrl !== '' ? rtrim($envBaseUrl, '/') : '');
define('SITE_NAME', 'Hugo Chichkine - Portfolio');

// Language settings
define('DEFAULT_LANG', 'fr');
define('AVAILABLE_LANGUAGES', ['fr', 'en']);