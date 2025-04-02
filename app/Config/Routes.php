<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/generarhorariostesis', 'Home::generarhorariostesis');
$routes->get('/usuario', 'Usuario::index');
$routes->post('api/eventos/cambiar-estado', 'Home::cambiarEstado');