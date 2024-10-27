<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');          // Rute untuk halaman Beranda
$routes->get('tentang', 'Home::tentang');  // Rute untuk halaman Tentang
$routes->get('tentang2', 'Home::tentang2');  // Rute untuk halaman Tentang
$routes->get('produk', 'Home::produk');    // Rute untuk halaman Produk
$routes->get('produk/greenfields', 'Home::produk1');  // Rute untuk halaman Produk1
$routes->get('produk/icithan', 'Home::produk2');  // Rute untuk halaman produk2
$routes->get('produk/silk', 'Home::produk3');  // Rute untuk halaman produk3
$routes->get('produk/ultramilk', 'Home::produk4');  //Rute untuk halaman produk4
$routes->get('artikel', 'ArtikelController::index');  // Rute untuk halaman Artikel
$routes->get('artikel/minum-susu-sehat-itu-penting', 'Home::artikel1');
$routes->get('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat', 'Home::artikel2');
$routes->get('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya', 'Home::artikel3');
$routes->get('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan', 'Home::artikel4');
$routes->get('aktivitas', 'Home::aktivitas'); // Rute untuk halaman Aktivitas
$routes->get('aktivitas/penyajian-milk', 'Home::aktivitas1');
$routes->get('aktivitas/pemindahan-milk', 'Home::aktivitas2');
$routes->get('aktivitas/peternakan', 'Home::aktivitas3');
$routes->get('aktivitas4', 'Home::aktivitas4');
$routes->get('kontak', 'Home::kontak');    // Rute untuk halaman Kontak
