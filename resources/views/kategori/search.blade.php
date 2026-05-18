<!DOCTYPE html>
<html>
<head>
    <title>Search Kategori</title>
</head>

<body class="container mt-5">

<h2>Hasil Pencarian: {{ $keyword }}</h2>

@foreach($hasil as $k)
    <div style="border:1px solid black; padding:10px; margin:10px;">
        <h4>{{ $k['nama'] }}</h4>
        <p>{{ $k['deskripsi'] }}</p>
    </div>
@endforeach

</body>
</html>