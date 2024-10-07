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

    public function produk(): string
    {
        return view('produk');
    }

    public function aktivitas(): string
    {
        return view('aktivitas');
    }

    public function kontak(): string
    {
        return view('kontak');
    }
}
