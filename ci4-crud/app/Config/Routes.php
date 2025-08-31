<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');

// Hello World
$routes->get('/hello', 'HelloWorld::index');

// Mahaiswa
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/search', 'Mahasiswa::search');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');

$routes->get('/mahasiswa/(:segment)', 'Mahasiswa::detail/$1');
$routes->get('/mahasiswa/edit/(:segment)', 'Mahasiswa::edit/$1');

$routes->put('/mahasiswa/update/(:segment)', 'Mahasiswa::update/$1');
$routes->delete('/mahasiswa/delete/(:segment)', 'Mahasiswa::delete/$1');