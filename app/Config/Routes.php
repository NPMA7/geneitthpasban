<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Routes::index');
$routes->get('/test', 'Routes::test');
$routes->get('/gallery', 'Routes::gallery');
