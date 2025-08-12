<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/connect', 'Home::Connection');
$routes->get('/about-us', 'Home::about');
$routes->get('/Visi-Misi', 'Home::visiMisi');
$routes->get('/profile', 'Home::profile');
$routes->get('/contact', 'Home::contact');
$routes->get('/gallery', 'GalleryController::gallery');
$routes->get('/articles', 'Home::articles');
$routes->get('/events', 'Home::events');
$routes->get('/clients', 'Home::clients');
$routes->get('/product', 'ProductController::product');
$routes->get('detail/(:num)', 'GalleryController::detail/$1');
$routes->get('/gallery/formAdd', 'GalleryController::formAdd'); 
$routes->post('/gallery/add', 'GalleryController::add'); 
$routes->get('/gallery/delete/(:num)', 'GalleryController::delete/$1'); 
$routes->get('/gallery/formUpdate/(:num)', 'GalleryController::formUpdate/$1'); 
$routes->post('/gallery/update/(:num)', 'GalleryController::update/$1'); 
