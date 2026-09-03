@extends('layouts.admin')

@section('page-title', 'Dashboard Utama')

@section('content')
<div class="row g-3">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3 rounded shadow-sm">
            <h5>Total Ekskul</h5>
            <h2 class="fw-bold mb-0">--</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white p-3 rounded shadow-sm">
            <h5>Total Artikel</h5>
            <h2 class="fw-bold mb-0">--</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info text-white p-3 rounded shadow-sm">
            <h5>Total Foto Galeri</h5>
            <h2 class="fw-bold mb-0">--</h2>
        </div>
    </div>
</div>
@endsection