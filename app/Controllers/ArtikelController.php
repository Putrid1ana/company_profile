<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikels'] = $artikelModel->findAll(); // Mengambil semua data artikel
        return view('artikel', $data); // Menampilkan view artikel.php
    }

    public function beranda()
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikels'] = $artikelModel->findAll(); // Mengambil semua data artikel
        return view('beranda', $data); // Menampilkan view beranda.php
    }

    public function show($id)
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikel'] = $artikelModel->find($id); 
        return view('artikel', $data);
    }
}
