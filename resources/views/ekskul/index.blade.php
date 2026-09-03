@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-dark">Ekstrakurikuler SMKN 4 Bogor</h2>
    <p class="text-muted">Wadah pengembangan bakat dan minat siswa</p>
</div>

<div class="row g-4">
    @forelse($ekskuls as $item)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                @if($item->gambar)
                    <img src="{{ asset('uploads/ekskul/' . $item->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $item->nama_ekskul }}">
                @else
                    <img src="https://placehold.co/600x400/007bff/white?text=No+Image" class="card-img-top" style="height: 200px; object-fit: cover;" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="fw-bold text-dark">{{ $item->nama_ekskul }}</h5>
                    <p class="card-text text-secondary small">{{ $item->deskripsi }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada data ekstrakurikuler.</p>
        </div>
    @endforelse
</div>
@endsection