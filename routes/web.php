<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;

// Route default
Route::get('/', function () {
    return view('welcome');
});

// Route hello
Route::get('/hello', function () {
    return 'Hello dari Laravel!';
});

// Route info
Route::get('/info', function () {
    return '<h1>Sistem Perpustakaan</h1><p>Selamat datang!</p>';
});

// Route JSON
Route::get('/buku', function () {
    return [
        'judul' => 'Laravel Programming',
        'pengarang' => 'John Doe',
        'harga' => 150000
    ];
});
// Route dengan parameter required
Route::get('/buku/{id}', function ($id) {
    return "Detail buku dengan ID: " . $id;
});

// Route dengan multiple parameters
Route::get('/search/{kategori}/{keyword}', function ($kategori, $keyword) {
    return "Cari buku kategori: $kategori dengan keyword: $keyword";
});
Route::get('/perpustakaan', [PerpustakaanController::class, 'index']); 
Route::get('/anggota', function () {
    
    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Rina Lestari',
            'email' => 'rina@email.com',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'status' => 'Aktif'
        ],
    ];

    return view('anggota.index', compact('anggota_list'));
});
Route::get('/anggota/{id}', function ($id) {

    $data = [
        1 => [
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        2 => [
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        3 => [
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Depok',
            'status' => 'Nonaktif'
        ],
        4 => [
            'kode' => 'AGT-004',
            'nama' => 'Rina Lestari',
            'email' => 'rina@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Bekasi',
            'status' => 'Aktif'
        ],
        5 => [
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Bogor',
            'status' => 'Aktif'
        ],
    ];

    $anggota = $data[$id] ?? null;

    return view('anggota.show', compact('anggota'));
});
use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search']);
Route::get('/kategori/{id}', [KategoriController::class, 'show']);