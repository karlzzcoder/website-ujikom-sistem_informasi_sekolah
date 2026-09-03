@extends('layouts.admin')

@section('page-title', 'Dashboard Utama')

@section('content')
<div class="row g-3">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3 rounded-4 border-0 shadow-sm">
            <h6 class="fw-semibold">Total Ekskul</h6>
            <h2 class="fw-bold mb-0">{{ $totalEkskul }}</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3 rounded-4 border-0 shadow-sm">
            <h6 class="fw-semibold">Total Artikel</h6>
            <h2 class="fw-bold mb-0">{{ $totalArtikel }}</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3 rounded-4 border-0 shadow-sm">
            <h6 class="fw-semibold">Total Foto Galeri</h6>
            <h2 class="fw-bold mb-0">{{ $totalGaleri }}</h2>
        </div>
    </div>
</div>
@endsection