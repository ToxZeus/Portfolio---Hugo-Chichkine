<?php
require_once __DIR__ . '/../app/bootstrap.php';

// Initialize the router
$router = new Router();

// Define routes
$router->get('/', 'HomeController@index');

// Run the application
$router->dispatch();