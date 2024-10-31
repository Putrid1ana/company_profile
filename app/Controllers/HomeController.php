<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\AktivitasModel;
use App\Models\ProdukModel;

class HomeController extends BaseController
{
    public function beranda()
    {
        $artikelModel = new ArtikelModel();
        $aktivitasModel = new AktivitasModel();
        $produkModel = new ProdukModel();

        $data['artikels'] = $artikelModel->findAll();
        $data['activities'] = $aktivitasModel->findAll();
        $data['products'] = $produkModel->findAll();


        return view('beranda', $data); // Pastikan ada view beranda.php untuk menampilkan data
    }
}
