<?php

namespace App\Models;

use CodeIgniter\Model;

class AktivitasModel extends Model
{
    protected $table = 'tb_aktivitas'; // Nama tabel di database
    protected $primaryKey = 'id_aktivitas'; // Primary key tabel
    protected $useAutoIncrement = true; // Menggunakan auto increment
    protected $allowedFields = [
        'nama_aktivitas_in',
        'nama_aktivitas_en',
        'foto_aktivitas',
        'deskripsi_aktivitas_in',
        'deskripsi_aktivitas_en'
    ]; // Kolom yang dapat diisi

    // Opsi timestamps otomatis jika ingin menggunakan created_at dan updated_at otomatis
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at'; // Optional, tambahkan kolom ini di tabel jika diperlukan

    // Pengaturan validasi
    protected $validationRules = [
        'nama_aktivitas_in' => 'required|max_length[100]',
        'nama_aktivitas_en' => 'required|max_length[100]',
        'foto_aktivitas' => 'required|max_length[255]',
        'deskripsi_aktivitas_in' => 'required',
        'deskripsi_aktivitas_en' => 'required'
    ];

    protected $validationMessages = [
        'nama_aktivitas_in' => [
            'required' => 'Nama aktivitas dalam bahasa Indonesia wajib diisi.',
            'max_length' => 'Nama aktivitas tidak boleh lebih dari 100 karakter.'
        ],
        'nama_aktivitas_en' => [
            'required' => 'Nama aktivitas dalam bahasa Inggris wajib diisi.',
            'max_length' => 'Nama aktivitas dalam bahasa Inggris tidak boleh lebih dari 100 karakter.'
        ],
        'foto_aktivitas' => [
            'required' => 'Foto aktivitas wajib diisi.',
            'max_length' => 'Foto aktivitas tidak boleh lebih dari 255 karakter.'
        ],
        'deskripsi_aktivitas_in' => [
            'required' => 'Deskripsi aktivitas dalam bahasa Indonesia wajib diisi.'
        ],
        'deskripsi_aktivitas_en' => [
            'required' => 'Deskripsi aktivitas dalam bahasa Inggris wajib diisi.'
        ]
    ];
}
