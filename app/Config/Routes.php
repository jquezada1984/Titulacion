<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/calendario', 'Home::index3');

$routes->get('/usuario', 'Usuario::index');