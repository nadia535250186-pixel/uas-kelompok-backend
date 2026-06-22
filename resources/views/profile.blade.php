<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - Kedai Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
        }
        .profile-card {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            overflow: hidden; /* Biar header melengkung sempurna */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="#">Kedai Minuman</a>
        <div class="d-flex align-items-center gap-3 ms-auto">
            <a href="/loyalty" class="btn btn-outline-light btn-sm">Lanjutkan</a>
            <form action="/logout" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm fw-semibold">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-5 pb-5" style="max-width: 600px;">
    
    <div class="text-center mb-2 fs-1">🥤</div>

    <div class="card profile-card border-0">
        <div class="card-header bg-primary text-white text-center py-4 border-0">
            <div class="rounded-circle bg-white text-primary d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 80px; height: 80px;">
                <span class="fs-1 fw-bold">{{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}</span>
            </div>
            <h3 class="fw-bold mb-0">{{ Auth::user()->name ?? 'Nama User' }}</h3>
            <p class="mb-0 text-white-50">{{ '@' . (Auth::user()->username ?? 'username') }}</p>
        </div>
        
        <div class="card-body p-4">
            <h5 class="fw-bold text-dark mb-3">Informasi Akun</h5>
            <div class="row mb-3 border-bottom pb-2">
                <div class="col-sm-4 text-muted">Nama Lengkap</div>
                <div class="col-sm-8 fw-semibold text-dark">{{ Auth::user()->name ?? '-' }}</div>
            </div>
            <div class="row mb-3 border-bottom pb-2">
                <div class="col-sm-4 text-muted">Alamat Email</div>
                <div class="col-sm-8 fw-semibold text-dark">{{ Auth::user()->email ?? '-' }}</div>
            </div>
            <div class="row mb-3 border-bottom pb-2">
                <div class="col-sm-4 text-muted">Username</div>
                <div class="col-sm-8 fw-semibold text-dark">{{ Auth::user()->username ?? '-' }}</div>
            </div>

            <div class="d-grid mt-4">
                <button onclick="window.location.href='/loyalty'" class="btn btn-primary btn-lg fs-6 fw-semibold shadow-sm">Lanjutkan ke Dashboard Loyalty →</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>