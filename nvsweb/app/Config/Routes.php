<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('UserCrud');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// custom routes
$routes->get('/', 'Laptop::main');
$routes->get('/signup', 'SignupController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'LogoutController::index',['filter' => 'authGuard']);
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);


#$routes->get('/', 'Laptop::index');
$routes->get('laptop-view', 'Laptop::index',['filter' => 'authGuard']);
$routes->get('laptop-issue-form', 'Laptop::create',['filter' => 'authGuard']);
$routes->post('laptop-issue-Submitform', 'Laptop::store',['filter' => 'authGuard']);
$routes->get('laptop-delete/(:num)', 'Laptop::delete/$1',['filter' => 'authGuard']);
$routes->get('laptop-edit-view/(:num)', 'Laptop::singleUser/$1',['filter' => 'authGuard']);
$routes->post('laptop-update', 'Laptop::update',['filter' => 'authGuard']);


$routes->get('ludoo-view', 'Ludoo::index',['filter' => 'authGuard']);
$routes->get('ludoo-entry-form', 'Ludoo::create',['filter' => 'authGuard']);
$routes->post('ludoo-entry-Submitform', 'Ludoo::store',['filter' => 'authGuard']);
$routes->get('ludoo-delete/(:num)', 'Ludoo::delete/$1',['filter' => 'authGuard']);
$routes->get('ludoo-edit-view/(:num)', 'Ludoo::singleUser/$1',['filter' => 'authGuard']);
$routes->post('ludoo-update', 'Ludoo::update',['filter' => 'authGuard']);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
