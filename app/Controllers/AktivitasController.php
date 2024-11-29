<?php

namespace App\Controllers;

use App\Models\AktivitasModel;

class AktivitasController extends BaseController
{
    public function index()
    {
        $aktivitasModel = new AktivitasModel();
        $data['activities'] = $aktivitasModel->findAll(); // Ambil semua data aktivitas
        return view('aktivitas', $data);
    }

    public function beranda()
    {
        $aktivitasModel = new AktivitasModel();
        $data['activities'] = $aktivitasModel->findAll(); // Ambil semua data aktivitas
        return view('beranda', $data); // Menampilkan view beranda.php
    }

    public function show($id)
    {
        $aktivitasModel = new AktivitasModel(); // Inisialisasi model di dalam metode
        $data['aktivitas'] = $aktivitasModel->find($id); // Mengambil data aktivitas berdasarkan ID
        return view('aktivitas', $data);
    }

    public function detail($slug)
    {
        // Membuat instance model aktivitas
        $aktivitasModel = new AktivitasModel();
        
        // Mengambil detail aktivitas berdasarkan slug
        $aktivitas = $aktivitasModel->where('slug', $slug)->first();

        // Jika aktivitas tidak ditemukan, tampilkan error
        if (!$aktivitas) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Aktivitas tidak ditemukan.");
        }

        // Menyimpan data aktivitas ke dalam view
        return view('detail_aktivitas', ['aktivitas' => $aktivitas]);
    }
}


