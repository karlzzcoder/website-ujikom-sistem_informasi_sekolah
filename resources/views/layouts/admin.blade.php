<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title', 'Admin Panel — SMKN 4 Bogor')</title>
    
    <!-- Bootstrap CSS Lokal (Offline) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <div class="d-flex" style="min-height: 100vh;">
        
        <!-- SIDEBAR ADMIN (Sebelah Kiri) -->
        <div class="bg-dark text-white p-3 d-flex flex-column" style="width: 260px; flex-shrink: 0;">
            <!-- Header Sidebar -->
            <a href="{{ url('/admin') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 fw-bold text-warning">PANEL ADMIN</span>
            </a>
            <small class="text-secondary">SMKN 4 BOGOR</small>
            
            <hr class="border-secondary">

            <!-- Navigasi Sidebar -->
            <ul class="nav nav-pills flex-column mb-auto gap-2">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link text-white {{ Request::is('admin') ? 'active bg-primary' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/ekskul') }}" class="nav-link text-white {{ Request::is('admin/ekskul*') ? 'active bg-primary' : '' }}">
                        Kelola Ekskul
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/artikel') }}" class="nav-link text-white {{ Request::is('admin/artikel*') ? 'active bg-primary' : '' }}">
                        Kelola Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/galeri') }}" class="nav-link text-white {{ Request::is('admin/galeri*') ? 'active bg-primary' : '' }}">
                        Kelola Galeri
                    </a>
                </li>
            </ul>

            <hr class="border-secondary">

            <!-- Tombol Logout & Kembali -->
<div class="d-flex flex-column gap-2">
    <a href="{{ url('/') }}" class="btn btn-outline-light w-100 btn-sm">&larr; Web Utama</a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger w-100 btn-sm">Logout</button>
    </form>
</div>
        </div>

        <!-- AREA KONTEN UTAMA (Sebelah Kanan) -->
        <div class="flex-grow-1 bg-light p-4">
            
            <!-- Header Bar Atas -->
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom bg-white p-3 rounded shadow-sm">
                <h4 class="m-0 fw-bold text-dark">@yield('page-title', 'Dashboard')</h4>
                <div class="text-secondary small">
                    Logged in as: <strong class="text-primary">Admin Sekolah</strong>
                </div>
            </div>

            <!-- Flash Message Notifikasi Sesi -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Tempat Mengisi Konten Halaman CRUD Admin -->
            @yield('content')
            
        </div>
    </div>

    <!-- Bootstrap JS Lokal (Offline) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>