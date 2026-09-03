<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel — SMKN 4 Bogor')</title>
    
    <!-- Bootstrap CSS Lokal (Offline) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <div class="d-flex" style="min-height: 100vh;">
        
        <!-- SIDEBAR ADMIN (Warna Putih Agak Gelap & Teks Biru) -->
        <div class="p-3 d-flex flex-column border-end" style="width: 260px; flex-shrink: 0; background-color: #f1f3f5;">
            <!-- Header Sidebar -->
            <a href="{{ url('/admin') }}" class="d-flex align-items-center mb-1 text-decoration-none">
                <span class="fs-5 fw-bold text-primary">PANEL ADMIN</span>
            </a>
            <small class="text-muted fw-semibold">SMKN 4 BOGOR</small>
            
            <hr class="my-3">

            <!-- Navigasi Sidebar -->
            <ul class="nav nav-pills flex-column mb-auto gap-2">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'active bg-primary text-white shadow-sm' : 'text-primary fw-semibold' }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/ekskul') }}" class="nav-link {{ Request::is('admin/ekskul*') ? 'active bg-primary text-white shadow-sm' : 'text-primary fw-semibold' }}">
                        Kelola Ekskul
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/artikel') }}" class="nav-link {{ Request::is('admin/artikel*') ? 'active bg-primary text-white shadow-sm' : 'text-primary fw-semibold' }}">
                        Kelola Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/galeri') }}" class="nav-link {{ Request::is('admin/galeri*') ? 'active bg-primary text-white shadow-sm' : 'text-primary fw-semibold' }}">
                        Kelola Galeri
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <!-- Tombol Kembali ke Web Utama & Logout -->
            <div class="d-flex flex-column gap-2">
                <a href="{{ url('/') }}" class="btn btn-primary w-100 btn-sm fw-semibold">
                    &larr; Web Utama
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100 btn-sm fw-semibold">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- AREA KONTEN UTAMA (Sebelah Kanan) -->
        <div class="flex-grow-1 bg-light p-4">
            
            <!-- Header Bar Atas -->
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom bg-white p-3 rounded-3 shadow-sm">
                <h4 class="m-0 fw-bold text-primary">@yield('page-title', 'Dashboard')</h4>
                <div class="text-secondary small">
                    Logged in as: <strong class="text-primary">{{ Auth::user()->name ?? 'Admin Sekolah' }}</strong>
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