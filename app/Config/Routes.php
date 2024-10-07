<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');          // Rute untuk halaman Beranda
$routes->get('tentang', 'Home::tentang');  // Rute untuk halaman Tentang
$routes->get('produk', 'Home::produk');    // Rute untuk halaman Produk
$routes->get('artikel', 'Home::artikel');  // Rute untuk halaman Artikel
$routes->get('aktivitas', 'Home::aktivitas'); // Rute untuk halaman Aktivitas
$routes->get('kontak', 'Home::kontak');    // Rute untuk halaman Kontak
