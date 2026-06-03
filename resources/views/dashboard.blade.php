@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h1 class="mb-4">Dashboard Perpustakaan</h1>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5>Total Buku</h5>
                <h2>{{ $totalBuku }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5>Buku Tersedia</h5>
                <h2>{{ $bukuTersedia }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5>Buku Habis</h5>
                <h2>{{ $bukuHabis }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5>Total Anggota</h5>
                <h2>{{ $totalAnggota }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5>Anggota Aktif</h5>
                <h2>{{ $anggotaAktif }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-secondary">
            <div class="card-body">
                <h5>Anggota Nonaktif</h5>
                <h2>{{ $anggotaNonaktif }}</h2>
            </div>
        </div>
    </div>
</div>

<h3>5 Buku Terbaru</h3>

<table class="table table-bordered mb-4">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bukuTerbaru as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->pengarang }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h3>5 Anggota Terbaru</h3>

<table class="table table-bordered mb-4">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggotaTerbaru as $anggota)
        <tr>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h3>Quick Links</h3>

<a href="{{ route('buku.index') }}" class="btn btn-primary">
    Data Buku
</a>

<a href="{{ route('anggota.index') }}" class="btn btn-success">
    Data Anggota
</a>

@endsection