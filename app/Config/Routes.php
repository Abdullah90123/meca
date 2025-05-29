<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'Home::test');


//  Home Routes - 

$routes->get('home', 'ProductsController::index', ['as' => 'home']);

// product routing --

$routes->get('products', 'ProductsController::products', ['as' => 'products']);