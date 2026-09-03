@extends('layouts.admin')

@section('page-title', 'Edit Foto Galeri')

@section('content')
<div class="card border-0 shadow-sm col-md-8">
    <div class="card-body">
        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Judul / Keterangan Foto</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $galeri->judul) }}" required>
                @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Foto Saat Ini</label>
                <div class="mb-2">
                    <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}" width="150" class="rounded border" alt="Foto Galeri">
                </div>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti file foto.</small>
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">Update Foto</button>
                <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection