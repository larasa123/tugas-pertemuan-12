@extends('layouts.app')

@section('content')

<h2 class="mb-4">Daftar Kategori Buku</h2>

<div class="row">

@foreach($kategori_list as $k)

<div class="col-md-4 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">

            <h5>{{ $k['nama'] }}</h5>
            <p>{{ $k['deskripsi'] }}</p>

            <span class="badge bg-primary">
                {{ $k['jumlah_buku'] }} Buku
            </span>

            <br><br>

            <a href="/kategori/{{ $k['id'] }}" class="btn btn-outline-primary btn-sm">
                Detail
            </a>

        </div>
    </div>
</div>

@endforeach

</div>

@endsection