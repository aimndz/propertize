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
$routes->get('/manage-rent', 'Manage_rent::index');
$routes->get('/list-property', 'List_property::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/list-rent', 'List_rent::index');
// $routes->get('/admin/overview', 'Admin_overview::index', ['filter' => 'admin']);
$routes->get('/admin/overview', 'Admin_overview::index');
$routes->get('/admin/create', 'Admin_create::index');
$routes->get('buy/get_property_details/(:num)', 'Buy::get_property_details/$1');

$routes->post('/create', 'Home::create');
$routes->post('/login', 'Home::login');
$routes->post('/logout', 'Home::logout');



$routes->post('/sell-list', 'List_property::list');
$routes->post('/rent-list', 'Manage_rent::list');
$routes->post('/admin-login', 'Admin::login');
$routes->post('/update-role', 'Sell::update_role');
$routes->post('/admin/accept', 'Admin_overview::accept');
$routes->post('/admin/reject', 'Admin_overview::reject');
$routes->post('/admin/create', 'Admin_create::create');

// $routes->post('/login', 'App\Controllers\AuthController::login');

service('auth')->routes($routes);
