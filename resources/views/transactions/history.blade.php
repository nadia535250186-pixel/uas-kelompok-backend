<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset+"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST /transactions</title>
</head>
<body>
    <h2>Riwayat Transaksi</h2>
    <p><strong>User ID:</strong> {{ $userId }}</p>
    <p><strong>Total Stamp:</strong> {{ $totalStamp }}<p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu ID</th>
                <th>Nama Menu</th>
                <th>Stamp Setelah Transaksi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transactions as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->menu_id }}</td>
                    <td>{{ $t->menu_name }}</td>
                    <td>{{ $t->stamp_after }}</td>
                    <td>{{ $t->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <form action="{{ url('/transactions/'.$t->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus transaksi ini?')">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" style="color: red; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                </tr>
                     <td colspan="6" style="text-align: center;">Data riwayat tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>