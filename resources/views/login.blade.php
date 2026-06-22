<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kedai Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengubah background menjadi gradasi warna pastel modern */
        body { 
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
        }
        /* Efek kartu login dengan shadow lembut agar terlihat mengambang */
        .login-card {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
<div class="container" style="max-width: 400px;">
    <div class="card login-card border-0 p-3">
        <div class="card-body">
            
            <div class="text-center mb-2 fs-1">🥤</div>
            
            <h2 class="fw-bold text-center mb-4">
                <span class="text-primary" style="letter-spacing: -0.5px;">Login User</span><br>
                <span class="text-warning" style="font-size: 1.5rem;">Kedai Minuman</span>
            </h2>

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label fw-medium text-secondary">Username</label>
                    <input type="text" class="form-control form-control-lg fs-6" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-medium text-secondary">Password</label>
                    <input type="password" class="form-control form-control-lg fs-6" id="password" name="password" placeholder="••••••••" required>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg fs-6 fw-semibold shadow-sm">Masuk Sekarang</button>
                </div>
            </form>
            <hr class="text-muted my-4">
            <div class="text-center">
                <a href="/register" class="text-decoration-none text-secondary small">Belum punya akun? <span class="text-primary fw-semibold">Register</span></a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>