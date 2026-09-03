<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — SMKN 4 Bogor</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

    <div class="card border-0 shadow-sm rounded-4 p-4" style="max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-primary">Login Admin</h4>
            <small class="text-muted">Sistem Informasi SMKN 4 Bogor</small>
        </div>

        @if(session('error'))
            <div class="alert alert-danger py-2 small">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success py-2 small">{{ session('success') }}</div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Email Admin</label>
                <input type="email" name="email" class="form-control" placeholder="admin@smkn4bogor.sch.id" required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-semibold mb-3">Masuk ke Dashboard</button>
            <a href="{{ url('/') }}" class="btn btn-link w-100 text-decoration-none text-muted small">&larr; Kembali ke Web Utama</a>
        </form>
    </div>

</body>
</html>     