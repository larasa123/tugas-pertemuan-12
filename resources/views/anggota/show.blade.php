<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

@if($anggota)

<div class="card">
    <div class="card-header">
        <h3>Detail Anggota</h3>
    </div>

    <div class="card-body">
        <p><b>Kode:</b> {{ $anggota['kode'] }}</p>
        <p><b>Nama:</b> {{ $anggota['nama'] }}</p>
        <p><b>Email:</b> {{ $anggota['email'] }}</p>
        <p><b>Telepon:</b> {{ $anggota['telepon'] }}</p>
        <p><b>Alamat:</b> {{ $anggota['alamat'] }}</p>

        <p>
            <b>Status:</b>
            @if($anggota['status'] == 'Aktif')
                <span class="badge bg-success">Aktif</span>
            @else
                <span class="badge bg-danger">Nonaktif</span>
            @endif
        </p>

        <a href="/anggota" class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>

@else
    <p>Data tidak ditemukan</p>
@endif

</body>
</html>