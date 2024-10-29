<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\AktivitasModel;

class HomeController extends BaseController
{
    public function beranda()
    {
        $artikelModel = new ArtikelModel();
        $aktivitasModel = new AktivitasModel();

        $data['artikels'] = $artikelModel->findAll();
        $data['activities'] = $aktivitasModel->findAll();

        return view('beranda', $data); // Pastikan ada view beranda.php untuk menampilkan data
    }
}
