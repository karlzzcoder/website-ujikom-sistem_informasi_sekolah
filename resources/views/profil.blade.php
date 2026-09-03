@extends('layouts.app')

@section('title', 'Profil — SMKN 4 Bogor')

@section('content')
<div class="row g-4">
    <!-- Tenteng Sekolah -->
    <div class="col-12">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <h3 class="fw-bold text-dark mb-3">Profil SMKN 4 Bogor</h3>
            <p class="text-secondary lh-lg mb-0">
                SMK Negeri 4 Kota Bogor merupakan sekolah kejuruan berstandar nasional yang berfokus pada pengembangan keahlian di bidang Teknologi Informasi dan Industri. Kami terus berkomitmen menghadirkan lingkungan belajar yang inovatif, disiplin, dan selaras dengan kebutuhan dunia industri modern.
            </p>
        </div>
    </div>

    <!-- Visi & Misi -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <h4 class="fw-bold text-dark mb-3">Visi</h4>
            <p class="text-secondary lh-lg mb-0">
                "Mewujudkan lembaga pendidikan kejuruan yang unggul, berkarakter, berwawasan lingkungan, serta mampu mencetak lulusan berdaya saing global."
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <h4 class="fw-bold text-dark mb-3">Misi</h4>
            <ul class="text-secondary ps-3 mb-0 lh-lg">
                <li>Menyelenggarakan pembelajaran berbasis teknologi dan kebutuhan industri.</li>
                <li>Membentuk karakter siswa yang berakhlak mulia, disiplin, dan mandiri.</li>
                <li>Meningkatkan kerja sama strategis dengan Dunia Usaha dan Dunia Industri (DUDI).</li>
                <li>Mengembangkan potensi bakat dan kewirausahaan peserta didik.</li>
            </ul>
        </div>
    </div>
</div>
@endsection