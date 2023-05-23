<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
########### $routes->setDefaultController('Home');
$routes->setDefaultMethod('controller_portada');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
#$routes->get('/', 'Home::index');
############
$routes->get('/', 'controller_portada::index');
$routes->get('/controller_portada', 'controller_portada::index');
$routes->get('/controller_portada/aboutus', 'controller_portada::aboutus');


$routes->get('/controllerinvestigadores', 'ControllerInvestigadores::index');
$routes->post('/controllerinvestigadores', 'ControllerInvestigadores::index');
$routes->get('/controllerinvestigadores/list', 'ControllerInvestigadores::list');
$routes->post('/controllerinvestigadores/list', 'ControllerInvestigadores::list');
$routes->get('/controllerinvestigadores/add', 'ControllerInvestigadores::add');
$routes->post('/controllerinvestigadores/add', 'ControllerInvestigadores::add');
$routes->get('/controllerinvestigadores/save', 'ControllerInvestigadores::save');
$routes->post('/controllerinvestigadores/save', 'ControllerInvestigadores::save');
$routes->get('/controllerinvestigadores/del', 'ControllerInvestigadores::del');
$routes->post('/controllerinvestigadores/del', 'ControllerInvestigadores::del');
$routes->post('/controllerinvestigadores/edit/(:any)', 'ControllerInvestigadores::edit/$1');
$routes->get('/controllerinvestigadores/edit/(:any)', 'ControllerInvestigadores::edit/$1');
$routes->get('/controllerinvestigadores/update', 'ControllerInvestigadores::update');
$routes->post('/controllerinvestigadores/update', 'ControllerInvestigadores::update');


$routes->get('/controllerequipo/list', 'Controllerequipo::list');
$routes->post('/controllerequipo/list', 'Controllerequipo::list');
$routes->get('/controllerequipo/add', 'Controllerequipo::add');
$routes->post('/controllerequipo/add', 'Controllerequipo::add');
$routes->get('/controllerequipo/save', 'Controllerequipo::save');
$routes->post('/controllerequipo/save', 'Controllerequipo::save');
$routes->get('/controllerequipo/del', 'Controllerequipo::del');
$routes->post('/controllerequipo/del', 'Controllerequipo::del');
$routes->get('/controllerequipo/edit/(:any)', 'Controllerequipo::edit/$1');
$routes->post('/controllerequipo/edit/(:any)', 'Controllerequipo::edit/$1');
$routes->get('/controllerequipo/update', 'Controllerequipo::update');
$routes->post('/controllerequipo/update', 'Controllerequipo::update');


$routes->get('/controllerreservas/list', 'Controllerreservas::list');
$routes->post('/controllerreservas/list', 'Controllerreservas::list');


$routes->get('/controllerfacultad/list', 'Controllerfacultad::list');
$routes->post('/controllerfacultad/list', 'Controllerfacultad::list');
$routes->get('/controllerfacultad/add', 'Controllerfacultad::add');
$routes->post('/controllerfacultad/add', 'Controllerfacultad::add');
$routes->get('/controllerfacultad/save', 'Controllerfacultad::save');
$routes->post('/controllerfacultad/save', 'Controllerfacultad::save');
$routes->get('/controllerfacultad/del', 'Controllerfacultad::del');
$routes->post('/controllerfacultad/del', 'Controllerfacultad::del');
$routes->post('/controllerfacultad/edit/(:any)', 'Controllerfacultad::edit/$1');
$routes->get('/controllerfacultad/edit/(:any)', 'Controllerfacultad::edit/$1');
$routes->get('/controllerfacultad/update', 'Controllerfacultad::update');
$routes->post('/controllerfacultad/update', 'Controllerfacultad::update');





$routes->get('/holamundo', 'Hola_Mundo::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
