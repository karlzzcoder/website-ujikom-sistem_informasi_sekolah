@extends('layouts.admin')

@section('page-title', 'Edit Artikel')

@section('content')
<div class="card border-0 shadow-sm col-md-8">
    <div class="card-body">
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $artikel->judul) }}" required>
                @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $artikel->penulis) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar Saat Ini</label>
                <div class="mb-2">
                    @if($artikel->gambar)
                        <img src="{{ asset('uploads/artikel/' . $artikel->gambar) }}" width="120" class="rounded border" alt="Gambar Artikel">
                    @else
                        <span class="badge bg-secondary">Tidak ada gambar</span>
                    @endif
                </div>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Isi / Konten Artikel</label>
                <textarea name="konten" rows="5" class="form-control @error('konten') is-invalid @enderror" required>{{ old('konten', $artikel->konten) }}</textarea>
                @error('konten') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">Update Artikel</button>
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection