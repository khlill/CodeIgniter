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
$routes->setDefaultController('Home');

$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
 $routes->match(['get', 'post'], 'create', 'Home::create');
 $routes->add('create', 'Home::create');
 $routes->match(['get', 'post'], 'insert', 'Home::insert');
 $routes->add('insert', 'Home::insert');
 $routes->match(['get', 'post'], 'sauvegarder', 'Home::sauvegarder');
 $routes->add('sauvegarder', 'Home::sauvegarder');
 $routes->match(['get', 'post'], 'auth', 'Home::auth');
 $routes->add('auth', 'Home::auth');
 $routes->match(['get', 'post'], 'logout', 'Home::logout');
 $routes->add('logout', 'Home::logout');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

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
