<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::LoginView'); //Arranca la página desde el registro
$routes->get('index', 'LoginController::index'); //Lleva al login desde el registro
$routes->get('RetRes', 'LoginController::RetRes');//LLeva al registro desde el login
$routes->post('register', 'RegisterController::register');
$routes->post('sesionverify', 'LoginController::login');//Lleva al menu desde el login
$routes->get('/menu', 'PerfilController::RetMen');//Redirije al menú
$routes->get('perfil', 'PerfilController::valida');//Valida la sesión antes de entrar al perfil
$routes->get('perfil', 'MenuController::perfil');//Lleva al perfil desde el menu
$routes->post('perfil/update', 'PerfilController::update');//Actualiza los datos del usuario
$routes->get('pagar', 'MenuController::pagar');//Lleva a la vista de paypal
$routes->get('menu', 'PagarController::menupaypal');//Vuelve del paypal al menu
$routes->get('comprobante', 'PagarController::vercomprobante');
$routes->get('login', 'MenuController::logout');//Cierra sesión y vuelve al login
$routes->post('pagar/validarSlotCode', 'PagarController::validarSlotCode');
$routes->get('aboutus', 'AboutusController::aboutus');