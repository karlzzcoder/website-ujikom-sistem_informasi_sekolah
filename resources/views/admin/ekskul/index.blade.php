@extends('layouts.admin')

@section('page-title', 'Kelola Ekstrakurikuler')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold m-0">Daftar Ekstrakurikuler</h5>
    <a href="{{ route('ekskul.create') }}" class="btn btn-primary btn-sm">+ Tambah Ekskul</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th width="100">Logo/Foto</th>
                        <th>Nama Ekskul</th>
                        <th>Deskripsi</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ekskuls as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('uploads/ekskul/' . $item->gambar) }}" width="50" height="50" class="rounded object-fit-cover" alt="Foto Ekskul">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td><strong>{{ $item->nama_ekskul }}</strong></td>
                        <td>{{ Str::limit($item->deskripsi, 60) }}</td>
                        <td class="text-center">
                            <a href="{{ route('ekskul.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('ekskul.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus ekskul ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada data ekstrakurikuler.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection