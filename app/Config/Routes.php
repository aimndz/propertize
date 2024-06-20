<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', 'Articles::index');
$routes->get('/buy', 'Buy::index');
$routes->get('/sell', 'Sell::index');
$routes->get('/rent', 'Rent::index');
$routes->get('/list-property', 'List_property::index');
$routes->get('/admin', 'Admin::index');
// $routes->get('/admin/overview', 'Admin_overview::index', ['filter' => 'admin']);
$routes->get('/admin/overview', 'Admin_overview::index');

$routes->post('/create', 'Home::create');
$routes->post('/login', 'Home::login');
$routes->post('/logout', 'Home::logout');

$routes->post('/sell-list', 'Sell::list');

$routes->post('/admin-login', 'Admin::login');


// $routes->post('/login', 'App\Controllers\AuthController::login');

service('auth')->routes($routes);
