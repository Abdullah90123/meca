<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('test', 'Home::test');


//  Home Routes 

$routes->get('home', 'ProductsController::index', ['as' => 'home']);

// product routing 

$routes->get('products', 'ProductsController::products', ['as' => 'products']);
$routes->get('products/details/(:num)', 'ProductsController::productDetail/$1', ['as' => 'products.details']);

// searching route  

$routes->get('products/search', 'ProductsController::search', ['as' => 'products/search']);
$routes->post('products/search', 'ProductsController::searchSystem', ['as' => 'products/search']);