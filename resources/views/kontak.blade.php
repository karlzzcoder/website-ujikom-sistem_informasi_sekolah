@extends('layouts.app')

@section('title', 'Kontak — SMKN 4 Bogor')

@section('content')
<div class="row g-4">
    <!-- Informasi Kontak Sekolah -->
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <h4 class="fw-bold text-dark mb-4">Hubungi Kami</h4>
            
            <div class="d-flex mb-3">
                <div class="me-3 fs-4"></div>
                <div>
                    <h6 class="fw-bold mb-1">Alamat Sekolah</h6>
                    <p class="text-secondary small mb-0">
                        Jl. Raya Tajur, Kp. Buntilis RT.02/RW.06, Muarasari, Kec. Bogor Selatan, Kota Bogor, Jawa Barat 16137
                    </p>
                </div>
            </div>

            <div class="d-flex mb-3">
                <div class="me-3 fs-4"></div>
                <div>
                    <h6 class="fw-bold mb-1">Telepon</h6>
                    <p class="text-secondary small mb-0">(0251) 8331301</p>
                </div>
            </div>

            <div class="d-flex mb-3">
                <div class="me-3 fs-4"></div>
                <div>
                    <h6 class="fw-bold mb-1">Email</h6>
                    <p class="text-secondary small mb-0">info@smkn4bogor.sch.id</p>
                </div>
            </div>

            <div class="d-flex">
                <div class="me-3 fs-4"></div>
                <div>
                    <h6 class="fw-bold mb-1">Jam Operasional</h6>
                    <p class="text-secondary small mb-0">Senin - Jumat: 07.00 - 16.00 WIB</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Kirim Pesan -->
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <h4 class="fw-bold text-dark mb-2">Kirim Pesan</h4>
            <p class="text-muted small mb-4">Punya pertanyaan atau saran? Silakan isi formulir di bawah ini.</p>

            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.');">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama..." required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" placeholder="nama@email.com" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold">Subjek</label>
                        <input type="text" class="form-control" placeholder="Judul pesan..." required>
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold">Pesan</label>
                        <textarea class="form-control" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-4 fw-semibold">Kirim Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection