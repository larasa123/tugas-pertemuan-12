<div class="card h-100 shadow-sm">
    <div class="card-body">

        <div class="text-center mb-3">
            <i class="bi bi-book text-primary" style="font-size: 3rem;"></i>
        </div>

        <h5 class="card-title">
            {{ $buku->judul }}
        </h5>

        <p class="text-muted">
            {{ $buku->pengarang }}
        </p>

        <p>
            <strong>Harga:</strong>
            Rp {{ number_format($buku->harga, 0, ',', '.') }}
        </p>

        <p>
            <strong>Stok:</strong>
            {{ $buku->stok }}
        </p>

        <p>
            <span class="badge bg-info">
                {{ $buku->kategori }}
            </span>
        </p>

        @if($buku->stok > 0)
            <span class="badge bg-success">
                Tersedia
            </span>
        @else
            <span class="badge bg-danger">
                Habis
            </span>
        @endif

        @if($showActions)
            <div class="mt-3">
                <a href="{{ route('buku.show', $buku->id) }}"
                   class="btn btn-primary btn-sm">
                    Detail
                </a>

                <a href="{{ route('buku.edit', $buku->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>
            </div>
        @endif

    </div>
</div>