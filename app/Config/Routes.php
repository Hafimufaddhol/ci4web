<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog','Blog::index');
$routes->get('/table', 'Table::index');

$routes->group('belajar',static function($routes){

    $routes->get('/','Belajar::index');
    $routes->get('(:any)','Belajar::$1');
    $routes->get('pesan','Belajar::pesan');
});




$routes->setAutoRoute(true);