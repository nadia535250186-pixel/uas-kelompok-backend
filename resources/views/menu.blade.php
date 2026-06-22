<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow-sm border-0 p-4">
        <h2 class="fw-bold mb-4 text-dark text-center">Tambah Menu Baru</h2>
        
        <form action="/menu/store" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nama_menu" class="form-label fw-semibold">Nama Menu:</label>
                <input type="text" class="form-control form-control-lg" id="nama_menu" name="nama_menu" placeholder="Contoh: JasJus, Cappuccino..." required>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="/welcome" class="text-muted text-decoration-none">← Kembali ke Daftar</a>
                <button type="submit" class="btn btn-primary px-4 shadow-sm fw-semibold">Simpan Menu</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>