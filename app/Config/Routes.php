<?php

namespace Config;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*--------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*--------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index', ['filter' => 'auth:admin,coordenador,secretaria,aluno']);
$routes->match(['get', 'post'], 'login', 'Login::index');
$routes->match(['get', 'post'], 'registrar', 'Registrar::index');
$routes->get('logout', 'Logout::index');

//Aluno
$adminFilter = 'auth:admin,coordenador,secretaria';
$routes ->group('aluno', ['filter' => $adminFilter], static function($routes){
    $routes->get('', 'Admin\Aluno::index');
    $routes->get('(:any)', 'Admin\Aluno::$1'); //reconhece o nome da função que está no controller edit($id), update($id)....
});

/*--------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
