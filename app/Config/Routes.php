<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::beranda'); // Rute untuk halaman Beranda yang menampilkan artikel dan aktivitas

// Rute untuk halaman Tentang
$routes->get('tentang', 'Home::tentang');  
$routes->get('tentang2', 'Home::tentang2');

// Rute untuk halaman Produk
$routes->get('produk', 'ProdukController::index');    
$routes->get('produk/Greenfields', 'Home::produk1');  
$routes->get('produk/Ichitan', 'Home::produk2');  
$routes->get('produk/Silk-Milk', 'Home::produk3');  
$routes->get('produk/Ultramilk', 'Home::produk4');  

// Rute untuk halaman Artikel
$routes->get('artikel', 'ArtikelController::index');  
$routes->get('artikel/minum-susu-sehat-itu-penting', 'Home::artikel1');
$routes->get('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat', 'Home::artikel2');
$routes->get('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya', 'Home::artikel3');
$routes->get('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan', 'Home::artikel4');

// Rute untuk halaman Aktivitas
$routes->get('aktivitas', 'AktivitasController::index'); 
$routes->get('aktivitas/Penyajian-Milk', 'Home::aktivitas1');
$routes->get('aktivitas/Pemindahan-Milk', 'Home::aktivitas2');
$routes->get('aktivitas/Peternakan-Sapi', 'Home::aktivitas3');

// Rute untuk halaman Kontak
$routes->get('kontak', 'Home::kontak');  
