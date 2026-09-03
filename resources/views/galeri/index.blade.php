@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-dark">Galeri Foto</h2>
    <p class="text-muted">Dokumentasi momen dan kegiatan sekolah</p>
</div>

<div class="row g-3">
    @forelse($galeris as $item)
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                <img src="{{ asset('uploads/galeri/' . $item->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $item->judul }}">
                <div class="card-body p-2 text-center">
                    <small class="fw-semibold text-dark">{{ $item->judul }}</small>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada foto galeri.</p>
        </div>
    @endforelse
</div>
@endsection