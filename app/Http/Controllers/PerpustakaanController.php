<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $nama_sistem = "Sistem Perpustakaan Laravel";

        $versi = "12.x";

        $total_buku = 2;

        $buku_list = [

            [
                'judul' => 'PHP',
                'pengarang' => 'Budi',
                'harga' => 75000
            ],

            [
                'judul' => 'Laravel',
                'pengarang' => 'Andi',
                'harga' => 120000
            ]

        ];

        return view('perpustakaan.index', compact(
            'nama_sistem',
            'versi',
            'total_buku',
            'buku_list'
        ));
    }
}