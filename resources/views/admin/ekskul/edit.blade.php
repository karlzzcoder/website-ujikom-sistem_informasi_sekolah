@extends('layouts.admin')

@section('page-title', 'Edit Data Ekskul')

@section('content')
<div class="card border-0 shadow-sm col-md-8">
    <div class="card-body">
        <form action="{{ route('ekskul.update', $ekskul->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Ekstrakurikuler</label>
                <input type="text" name="nama_ekskul" class="form-control @error('nama_ekskul') is-invalid @enderror" value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}" required>
                @error('nama_ekskul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Foto / Logo Saat Ini</label>
                <div class="mb-2">
                    @if($ekskul->gambar)
                        <img src="{{ asset('uploads/ekskul/' . $ekskul->gambar) }}" width="100" class="rounded border" alt="Foto Ekskul">
                    @else
                        <span class="badge bg-secondary">Tidak ada gambar</span>
                    @endif
                </div>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi Ekskul</label>
                <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">Update Ekskul</button>
                <a href="{{ route('ekskul.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection