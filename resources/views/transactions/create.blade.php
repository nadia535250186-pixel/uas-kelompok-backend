<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset+"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST /transactions</title>
</head>
<body>
    <h2>Form Transaksi Baru</h2>

    @if($errors->any())
        <div style =" :red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div
    @endif

    <form action="{{ url('transactions') }}" method="POST"
        @csrf
        <label>User ID:</label><br>
        <input type="text" name="userId" required><br><br>

        <label>Menu ID:</label><br>
        <input type="text" name="menuId" required><br><br>

        <button type="submit">Kirim Transaksi</button>
    </form>
</body>
</html>
