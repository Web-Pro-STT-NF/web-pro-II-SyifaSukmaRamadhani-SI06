<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Login
$routes->get('/', 'LandingPage::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');
$routes->get('/login/member', 'Login::member');
$routes->get('/login/logout', 'Login::logout');
//KategoriPeserta
$routes->get('/kategori_peserta', 'KategoriPeserta::index');
$routes->get('/KategoriPeserta/create', 'KategoriPeserta::create');
$routes->post('/KategoriPeserta/KategoriPeserta/save', 'KategoriPeserta::save');
$routes->get('/KategoriPeserta/delete/(:num)', 'KategoriPeserta::delete/$1');
$routes->get('/KategoriPeserta/edit/(:num)', 'KategoriPeserta::edit/$1');
$routes->post('/KategoriPeserta/update/(:num)', 'KategoriPeserta::update/$1');
//JenisKegiatan
$routes->get('/jenis_kegiatan', 'JenisKegiatan::index');
$routes->get('/JenisKegiatan/create', 'JenisKegiatan::create');
$routes->post('/JenisKegiatan/JenisKegiatan/save', 'JenisKegiatan::save');
$routes->get('/JenisKegiatan/delete/(:num)', 'JenisKegiatan::delete/$1');
$routes->get('/JenisKegiatan/edit/(:num)', 'JenisKegiatan::edit/$1');
$routes->post('/JenisKegiatan/update/(:num)', 'JenisKegiatan::update/$1');
//Register
$routes->get('/vw_register', 'Register::index');
$routes->post('/register/process', 'Register::process');
//Register Auth
$routes->get('/loginAuth', 'LoginAuth::index');
$routes->get('/regisAuth', 'LoginAuth::register');
//kegiatan
$routes->get('/kegiatan', 'Kegiatan::index');
$routes->get('/kegiatan/detail/(:num)', 'Kegiatan::detail/$1');
$routes->get('/kegiatan/create', 'Kegiatan::create');
$routes->post('/kegiatan/kegiatan/save', 'Kegiatan::save');
$routes->get('/kegiatan/delete/(:num)', 'Kegiatan::delete/$1');
$routes->get('/kegiatan/edit/(:num)', 'Kegiatan::edit/$1');
$routes->post('/kegiatan/update/(:num)', 'Kegiatan::update/$1');
//Daftar
$routes->get('/daftar', 'Daftar::index');
$routes->get('/daftar/create', 'Daftar::create');
$routes->post('/daftar/daftar/save', 'Daftar::save');
$routes->get('/daftar/delete/(:num)', 'Daftar::delete/$1');
$routes->get('/daftar/edit/(:num)', 'Daftar::edit/$1');
$routes->post('/daftar/update/(:num)', 'Daftar::update/$1');
//Dashboard
$routes->get('/landingpage', 'LandingPage::index');
$routes->get('/landingpage/detail/(:num)', 'LandingPage::detail/$1');
$routes->get('/landingpage/daftar/(:num)', 'LandingPage::daftar/$1');
$routes->post('/landingpage/save', 'LandingPage::save');
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
