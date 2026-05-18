<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Perpustakaan</span>

        <div>
            <a href="/kategori" class="btn btn-light btn-sm">Kategori</a>
            <a href="/anggota" class="btn btn-light btn-sm">Anggota</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    @yield('content')

</div>

</body>
</html>