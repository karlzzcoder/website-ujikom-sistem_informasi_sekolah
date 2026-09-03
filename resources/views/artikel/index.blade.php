@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-dark">Berita & Artikel Sekolah</h2>
    <p class="text-muted">Informasi terbaru seputar kegiatan SMKN 4 Bogor</p>
</div>

<div class="row g-4">
    @forelse($artikels as $item)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                @if($item->gambar)
                    <img src="{{ asset('uploads/artikel/' . $item->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $item->judul }}">
                @else
                    <img src="https://placehold.co/600x400/6c757d/white?text=No+Image" class="card-img-top" style="height: 200px; object-fit: cover;" alt="No Image">
                @endif
                <div class="card-body d-flex flex-column">
                    <small class="text-muted mb-2">{{ $item->created_at->format('d M Y') }} | Oleh {{ $item->penulis }}</small>
                    <h5 class="fw-bold text-dark mb-2">{{ $item->judul }}</h5>
                    <p class="card-text text-secondary small mb-3">{{ Str::limit($item->konten, 100) }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada artikel yang diterbitkan.</p>
        </div>
    @endforelse
</div>
@endsection