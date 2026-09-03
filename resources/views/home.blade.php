@extends('layouts.app')

@section('content')

<!-- 1. HERO BANNER (FOTO GEDUNG) -->
<section class="py-3 my-2">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <h1 class="fw-bold display-6 text-dark mb-3">
                Selamat Datang di Sistem Informasi SMKN 4 Bogor
            </h1>
            <p class="text-secondary fs-5 mb-4">
                Mewujudkan Generasi Unggul, Berkarakter, dan Berdaya Saing.
            </p>
            <div class="d-flex gap-2">
                <a href="{{ url('/galeri') }}" class="btn btn-primary text-white fw-semibold px-4 py-2 shadow-sm">Jelajahi Galeri</a>
                <a href="{{ url('/profil') }}" class="btn btn-outline-secondary px-4 py-2">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Foto Gedung Sekolah -->
            <img src="{{ asset('img/sekolah HD.jpg') }}" onerror="this.src='https://placehold.co/600x360/007bff/white?text=Foto+Gedung+SMKN+4+Bogor'" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 360px;" alt="Gedung SMKN 4 Bogor">
        </div>
    </div>
</section>

<!-- 2. SECTION PROFIL (FOTO KEGIATAN KBM) -->
<section class="py-5 my-4 bg-white rounded-4 p-4 shadow-sm">
    <div class="row align-items-center g-4">
        <div class="col-md-5">
            <!-- Foto Kegiatan Belajar Mengajar (KBM) -->
            <img src="{{ asset('img/kegiatan-kbm.jpg') }}" onerror="this.src='https://placehold.co/500x350/6c757d/white?text=Foto+Kegiatan+KBM'" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 300px;" alt="Kegiatan KBM SMKN 4 Bogor">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold text-dark mb-3">Mengenal Lebih Dekat SMKN 4 Bogor</h2>
            <p class="text-secondary lh-lg mb-0">
                SMK Negeri 4 Kota Bogor merupakan Sekolah Menengah Kejuruan Negeri unggulan yang berfokus pada pengembangan keahlian di bidang Teknologi Informasi dan Industri. Berlokasi strategis di Muarasari, Kota Bogor Selatan, sekolah kami berkomitmen mencetak lulusan yang tangguh, terampil, mandiri, serta siap bersaing di dunia kerja maupun dunia industri modern.
            </p>
        </div>
    </div>
</section>

<!-- 3. SECTION JURUSAN (LOGO JURUSAN) -->
<section class="py-4 my-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Jurusan di SMKN 4 Bogor</h2>
        <p class="text-secondary">Program keahlian unggulan yang siap mencetak tenaga kerja profesional</p>
    </div>
    <div class="row g-4">
        <!-- PPLG -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                <div class="mx-auto mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center p-3" style="width: 100px; height: 100px;">
                    <img src="{{ asset('img/PPLG.png') }}" onerror="this.src='https://placehold.co/100x100/007bff/white?text=PPLG'" class="img-fluid" style="max-height: 70px;" alt="Logo PPLG">
                </div>
                <h5 class="fw-bold text-dark mb-1">PPLG</h5>
                <p class="text-primary fw-semibold small mb-2">Pengembangan Perangkat Lunak & Gim</p>
                <p class="text-muted small mb-0">Mempelajari pemrograman web, aplikasi mobile, dan pengelolaan database.</p>
            </div>
        </div>

        <!-- TKRO -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                <div class="mx-auto mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center p-3" style="width: 100px; height: 100px;">
                    <img src="{{ asset('img/TKRO.png') }}" onerror="this.src='https://placehold.co/100x100/ffc107/white?text=TKRO'" class="img-fluid" style="max-height: 70px;" alt="Logo TKRO">
                </div>
                <h5 class="fw-bold text-dark mb-1">TKRO</h5>
                <p class="text-warning fw-semibold small mb-2">Teknik Kendaraan Ringan Otomotif</p>
                <p class="text-muted small mb-0">Mempelajari sistem kelistrikan, perawatan mesin kendaraan, dan teknologi otomotif.</p>
            </div>
        </div>

        <!-- TJKT -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                <div class="mx-auto mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center p-3" style="width: 100px; height: 100px;">
                    <img src="{{ asset('img/TJKT.png') }}" onerror="this.src='https://placehold.co/100x100/0dcaf0/white?text=TJKT'" class="img-fluid" style="max-height: 70px;" alt="Logo TJKT">
                </div>
                <h5 class="fw-bold text-dark mb-1">TJKT</h5>
                <p class="text-info fw-semibold small mb-2">Teknik Jaringan Komputer & Telekomunikasi</p>
                <p class="text-muted small mb-0">Mempelajari instalasi jaringan, server, dan jaringan fiber optic.</p>
            </div>
        </div>

        <!-- TPFL -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                <div class="mx-auto mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center p-3" style="width: 100px; height: 100px;">
                    <img src="{{ asset('img/TPFL.png') }}" onerror="this.src='https://placehold.co/100x100/dc3545/white?text=TPFL'" class="img-fluid" style="max-height: 70px;" alt="Logo TPFL">
                </div>
                <h5 class="fw-bold text-dark mb-1">TPFL</h5>
                <p class="text-danger fw-semibold small mb-2">Teknik Pengelasan & Fabrikasi Logam</p>
                <p class="text-muted small mb-0">Mempelajari pengelasan industri, perancangan struktur logam, dan teknik fabrikasi.</p>
            </div>
        </div>
    </div>
</section>

@endsection