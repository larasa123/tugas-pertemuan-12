<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Programming',
            'deskripsi' => 'Buku programming',
            'icon' => 'code-slash',
            'warna' => 'primary'
        ]);

        Kategori::create([
            'nama_kategori' => 'Database',
            'deskripsi' => 'Buku database',
            'icon' => 'database',
            'warna' => 'success'
        ]);

        Kategori::create([
            'nama_kategori' => 'Web Design',
            'deskripsi' => 'Buku web design',
            'icon' => 'palette',
            'warna' => 'info'
        ]);

        Kategori::create([
            'nama_kategori' => 'Networking',
            'deskripsi' => 'Buku networking',
            'icon' => 'wifi',
            'warna' => 'warning'
        ]);

        Kategori::create([
            'nama_kategori' => 'Data Science',
            'deskripsi' => 'Buku data science',
            'icon' => 'graph-up',
            'warna' => 'danger'
        ]);
    }
}