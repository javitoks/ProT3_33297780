<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('contactanos', 'Home::contactanos  ');
/*$routes->get('login', 'Home::login');*/

/*RUTAS DEL REGISTRO DE USUARIOS*/
$routes->get('/registro','UsuarioController::create'); 
$routes->post('/enviar_form','UsuarioController::formValidation');

/*RUTAS DEL CRUD*/
$routes->get('/listado','UsuarioController::listar'); 
$routes->get('/obtenerUsuario/(:any)','UsuarioController::obtenerUsuario/$1');
$routes->get('/crearUsuario','UsuarioController::crearUsuario');
$routes->get('/eliminarUsuario/(:any)','UsuarioController::eliminarUsuario/$1');
$routes->post('/editarUsuario','UsuarioController::editarUsuario');

/*RUTAS DEL LOGIN DE USUARIOS*/
$routes->get('/login', 'LoginController'); 
$routes->post('/enviarlogin','LoginController::auth'); 
$routes->get('/panel', 'PanelController::index',['filter' => 'auth']); 
$routes->get('/logout', 'LoginController::logout');

