<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Matematika',
                'deskripsi' => 'Buku logika dan angka',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Desain',
                'deskripsi' => 'UI/UX dan grafis',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Jaringan',
                'deskripsi' => 'Networking komputer',
                'jumlah_buku' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Sistem Operasi',
                'deskripsi' => 'Linux dan Windows',
                'jumlah_buku' => 15
            ],
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = [
            'id' => $id,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding'
        ];

        $buku_list = [
            ['judul' => 'Laravel Dasar'],
            ['judul' => 'PHP OOP'],
            ['judul' => 'Database MySQL']
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = [
            ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Coding'],
            ['id' => 2, 'nama' => 'Matematika', 'deskripsi' => 'Angka'],
            ['id' => 3, 'nama' => 'Desain', 'deskripsi' => 'UI UX'],
            ['id' => 4, 'nama' => 'Jaringan', 'deskripsi' => 'Networking'],
        ];

        $hasil = array_filter($kategori_list, function ($item) use ($keyword) {
            return stripos($item['nama'], $keyword) !== false;
        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}