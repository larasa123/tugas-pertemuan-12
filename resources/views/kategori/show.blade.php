@extends('layouts.app')

@section('content')

<h3>{{ $kategori['nama'] }}</h3>
<p>{{ $kategori['deskripsi'] }}</p>

<hr>

<h5>Daftar Buku</h5>

<ul>
@foreach($buku_list as $b)
    <li>{{ $b['judul'] }}</li>
@endforeach
</ul>

<a href="/kategori" class="btn btn-secondary btn-sm mt-3">
    Kembali
</a>

@endsection