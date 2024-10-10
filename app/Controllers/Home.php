<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('beranda'); // Nama view menggunakan huruf kecil sesuai dengan standar penulisan di CI
    }

    public function tentang(): string
    {
        return view('tentang'); // Sama seperti di routes, gunakan huruf kecil
    }

    public function artikel(): string
    {
        return view('artikel');
    }

    public function Artikel1(): string
    {
        return view('Artikel1');
    }
    
    public function Artikel2(): string
    {
        return view('Artikel2');
    }

    public function Artikel3(): string
    {
        return view('Artikel3');
    }

    public function Artikel4(): string
    {
        return view('Artikel4');
    }

    public function produk(): string
    {
        return view('produk');
    }

    public function Produk1(): string
    {
        return view('Produk1');
    }

    public function Produk2(): string
    {
        return view('Produk2');
    }

    public function Produk3(): string
    {
        return view('Produk3');
    }

    public function Produk4(): string
    {
        return view('Produk4');
    }

    public function aktivitas(): string
    {
        return view('aktivitas');
    }

    public function Aktivitas1(): string
    {
        return view('Aktivitas1');
    }

    public function Aktivitas2(): string
    {
        return view('Aktivitas2');
    }

    public function Aktivitas3(): string
    {
        return view('Aktivitas3');
    }

    public function Aktivitas4(): string
    {
        return view('Aktivitas4');
    }

    public function kontak(): string
    {
        return view('kontak');
    }
}
