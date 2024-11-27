<?php

use App\Controllers\BelajarHelper;
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
$routes->group('helper',static function($routes){
    $routes->get('/','BelajarHelper::index');
    $routes->get('belajar','BelajarHelper::helper');
});
$routes->group('belajarlibrary',static function ($routes){
    $routes->get('/','BelajarLibrary::index');
    $routes->get('(:any)','BelajarLibrary::$1');
    // $routes->get('login','BelajarLibrary::login');
    // $routes->get('logout','BelajarLibrary::logout');

});
$routes->get('/mahasiswa','Mahasiswa::show');





$routes->setAutoRoute(true);