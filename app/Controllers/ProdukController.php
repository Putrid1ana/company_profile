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

    public function detail($slug)
    {
        // Membuat instance model produk
        $produkModel = new ProdukModel();
        
        // Mengambil detail produk berdasarkan slug
        $produk = $produkModel->where('slug', $slug)->first();

        // Jika produk tidak ditemukan, tampilkan error
        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk tidak ditemukan.");
        }

        // Menyimpan data produk ke dalam view
        return view('detail_produk', ['produk' => $produk]);
    }
}
