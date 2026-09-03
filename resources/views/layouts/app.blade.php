<!DOCTYPE html>
<html lang="id" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMKN 4 Bogor — Web Informasi')</title>
    
    <!-- Bootstrap CSS Lokal (Offline) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar Utama -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm py-3" style="background-color: #f1f3f5;">
    <div class="container">
        <!-- Logo SMKN 4 Bogor -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/Logo SMKN 4 Bogor.png') }}" alt="SMKN 4 Bogor" height="50" class="me-2">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Utama -->
            <ul class="navbar-nav mx-auto align-items-lg-center gap-2 gap-lg-3 fs-6">
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('/') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('profil') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('ekskul*') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/ekskul') }}">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('artikel*') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('galeri*') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary {{ Request::is('kontak') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/kontak') }}">Kontak</a>
                </li>
            </ul>

            <!-- Tombol Admin (Biru) -->
            <div class="d-flex mt-2 mt-lg-0">
                <a class="btn btn-primary fw-semibold px-4 shadow-sm" href="{{ url('/admin') }}">Admin</a>
            </div>
        </div>
    </div>
</nav>

    <!-- Area Konten Utama (Mengisi Sisa Ruang Layar) -->
    <main class="flex-grow-1 py-4">
        <div class="container">
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

            @yield('content')
        </div>
    </main>

    <!-- Footer Selalu Menempel di Paling Bawah -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} SMKN 4 Bogor. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap JS Lokal (Offline) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>