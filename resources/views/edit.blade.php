<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <h2 class="fw-bold text-dark mb-4 text-center">Edit Menu</h2>

            <form action="/menu/update/{{ $menu->id }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_menu" class="form-label fw-semibold">Nama Menu</label>
                    <input type="text" class="form-control form-control-lg" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}" placeholder="Masukkan nama menu...">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm fw-semibold">Update Menu</button>
                    <a href="/welcome" class="btn btn-light btn-sm text-muted">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>