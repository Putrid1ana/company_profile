<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'tb_produk'; // Nama tabel di database
    protected $primaryKey = 'id_produk'; // Primary key tabel
    protected $useAutoIncrement = true; // Menggunakan auto increment
    protected $allowedFields = [
        'nama_produk_in',
        'nama_produk_en',
        'foto_produk',
        'deskripsi_produk_in',
        'deskripsi_produk_en'
    ]; // Kolom yang dapat diisi

    // Opsi timestamps otomatis jika ingin menggunakan created_at dan updated_at otomatis
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at'; // Optional, tambahkan kolom ini di tabel jika diperlukan

    // Pengaturan validasi
    protected $validationRules = [
        'nama_produk_in' => 'required|max_length[100]',
        'nama_produk_en' => 'required|max_length[100]',
        'foto_produk' => 'required|max_length[255]',
        'deskripsi_produk_in' => 'required',
        'deskripsi_produk_en' => 'required'
    ];

    protected $validationMessages = [
        'nama_produk_in' => [
            'required' => 'Nama produk dalam bahasa Indonesia wajib diisi.',
            'max_length' => 'Nama produk tidak boleh lebih dari 100 karakter.'
        ],
        'nama_produk_en' => [
            'required' => 'Nama produk dalam bahasa Inggris wajib diisi.',
            'max_length' => 'Nama produk dalam bahasa Inggris tidak boleh lebih dari 100 karakter.'
        ],
        'foto_produk' => [
            'required' => 'Foto produk wajib diisi.',
            'max_length' => 'Foto produk tidak boleh lebih dari 255 karakter.'
        ],
        'deskripsi_produk_in' => [
            'required' => 'Deskripsi produk dalam bahasa Indonesia wajib diisi.'
        ],
        'deskripsi_produk_en' => [
            'required' => 'Deskripsi produk dalam bahasa Inggris wajib diisi.'
        ]
    ];
}
