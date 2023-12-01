<?php

use App\Controllers\twentythree\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/day/(:num)/puzzle/(:num)', [Home::class, 'show']);
$routes->get('/', [Home::class, 'index']);
