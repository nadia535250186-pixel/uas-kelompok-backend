<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kedai Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { height: 100vh; display: flex; align-items: center; justify-content: center; }
    </style>
</head>
<body class="bg-light">
<div class="container" style="max-width: 450px;">
    <div class="card shadow-sm border-0 p-3">
        <div class="card-body">
            <h2 class="fw-bold text-center text-success mb-4">Register User</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nama@contoh.com" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label fw-medium">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Buat username unik" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-success fw-semibold shadow-sm">Daftar Akun</button>
                </div>
            </form>
            <hr class="text-muted my-4">
            <div class="text-center">
                <a href="/login" class="text-decoration-none text-secondary small">Sudah punya akun? <span class="text-success fw-semibold">Login di sini</span></a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>