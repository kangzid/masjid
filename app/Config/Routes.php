<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Routes
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/activity', 'Pages::activity');
$routes->get('/event', 'Pages::event');
$routes->get('/sermon', 'Pages::sermon');
$routes->get('/blog', 'Pages::blog');
$routes->get('/jadwal_sholat', 'Pages::jadwal_sholat');
$routes->get('/team', 'Pages::team');
$routes->get('/contact', 'Pages::contact');
$routes->get('/comingsoon', 'Pages::comingsoon');
$routes->get('/profil', 'Pages::profil');
$routes->get('/peraturan', 'Pages::peraturan');
$routes->post('/submit-feedback', 'Pages::submitFeedback');
$routes->post('/submit-feedback', 'Pages::submitFeedback');

$routes->get('/pembangunan_masjid', 'Pages::pembangunan_masjid');
$routes->get('/404', 'Pages::error404');

// Authentication Routes
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginPost');
$routes->get('/logout', 'AuthController::logout');

// Admin Routes (Protected by Auth Filter)
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/dashboard', 'AdminController::dashboard');
    $routes->get('/dashboardabout', 'AdminController::about'); 
    $routes->get('api/donation-statistics', 'AdminController::getDonationStatistics');


    // Jadwal Imam
    $routes->get('/admin/jadwal_imam', 'AdminController::jadwalImam');
    $routes->post('/admin/jadwal_imam/update', 'AdminController::updateJadwalImam');

    // Event Management
    $routes->get('/dashboardevent', 'editeventController::index');
    $routes->get('/admin/event/add', 'editeventController::add');
    $routes->post('/admin/event/create', 'editeventController::create');
    $routes->get('/admin/event/delete/(:num)', 'editeventController::delete/$1');
    $routes->post('/admin/event/update/(:num)', 'editeventController::update/$1');

    // Jadwal Sholat
    $routes->get('/dashboardjadwalimam', 'JadwalSholatController::index');
    $routes->post('/dashboardjadwalimam/update', 'JadwalSholatController::update');
    $routes->post('/dashboardjadwalmuadzin/update', 'JadwalSholatController::updateMuadzin');
    // Rute untuk dashboardkas
    $routes->get('/dashboardkas', 'KasController::index');
    $routes->post('/addKas', 'KasController::store');
    $routes->post('/updateKas/(:num)', 'KasController::update/$1');
    $routes->get('/deleteKas/(:num)', 'KasController::delete/$1');
});

// Update About
$routes->post('/admin/update_about', 'AdminController::update_about');