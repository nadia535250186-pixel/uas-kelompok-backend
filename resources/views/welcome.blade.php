<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kedai Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">Kedai Minuman</a>
        <button class="navbar-expand" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center gap-3">
                <a href="/profile" class="text-white text-decoration-none fw-medium">Lihat Profil</a>
                
                <form action="/logout" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm fw-semibold px-3 shadow-sm">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark m-0">Daftar Menu Minuman</h2>
            <p class="text-muted small">Kelola data menu jualan kamu di sini</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="/menu" class="btn btn-primary fw-semibold shadow-sm">+ Tambah Menu Baru</a>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="ps-4" style="width: 10%">ID</th>
                            <th scope="col" style="width: 60%">Nama Menu</th>
                            <th scope="col" class="text-center" style="width: 30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-medium text-secondary">#1</td>
                            <td class="fw-semibold text-dark">Es Cappuccino Cincau</td>
                            <td class="text-center">
                                <a href="/menu/edit/1" class="btn btn-warning btn-sm fw-medium shadow-sm me-2">Edit</a>
                                <form action="/menu/delete/1" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm fw-medium shadow-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>