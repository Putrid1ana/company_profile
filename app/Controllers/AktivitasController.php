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
}


