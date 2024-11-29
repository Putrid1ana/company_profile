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
    public function detailBySlug($slug)
    {
        // Membuat instance model artikel
        $artikelModel = new \App\Models\ArtikelModel();

        // Mengambil artikel berdasarkan slug
        $artikel = $artikelModel->where('slug', $slug)->first();

        // Jika artikel tidak ditemukan, tampilkan error 404
        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Artikel tidak ditemukan.");
        }

        // Ambil ID artikel yang sedang dilihat
        $id = $artikel['id_artikel'];

        // Ambil 3 artikel lain yang berbeda ID-nya
        $data['referensiLainnya'] = $artikelModel->where('id_artikel !=', $id)
            ->findAll(3);

        // Kirim data artikel dan referensi lainnya ke view
        return view('detail_artikel', ['artikel' => $artikel, 'referensiLainnya' => $data['referensiLainnya']]);
    }
}
