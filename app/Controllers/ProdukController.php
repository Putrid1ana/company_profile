<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $produkModel = new ProdukModel();
        $data['produks'] = $produkModel->findAll(); // Mengambil semua data produk

        return view('produk', $data);
    }

    public function show($id)
    {
        $produkModel = new ProdukModel(); // Inisialisasi model di dalam metode
        $data['produk'] = $produkModel->find($id);
        dd($data); // Mengambil data artikel berdasarkan ID
        return view('produk', $data);
    }
}
