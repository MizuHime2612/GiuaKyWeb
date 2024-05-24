<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Trang chủ
$routes->get('/', 'Home::index');

$routes->get('/ok', 'LoginController::index');
$routes->post('/err', 'LoginController::login');


