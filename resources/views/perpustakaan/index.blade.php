<h1>{{ $nama_sistem }}</h1>

<p>Versi Laravel {{ $versi }}</p>

<p>Total Buku: {{ $total_buku }}</p>

@foreach ($buku_list as $buku)

<div style="border:1px solid black; margin:10px; padding:10px;">

    <h3>{{ $buku['judul'] }}</h3>

    <p>{{ $buku['pengarang'] }}</p>

    <p>Rp {{ $buku['harga'] }}</p>

</div>

@endforeach