<h1>Loyalty System</h1>

<a href="/loyalty/add">Tambah Loyalty</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Pelanggan</th>
        <th>No HP</th>
        <th>Jumlah Stamp</th>
        <th>Aksi</th>
    </tr>

    @foreach ($loyalties as $loyalty)
    <tr>
        <td>{{ $loyalty->id }}</td>
        <td>{{ $loyalty->nama_pelanggan }}</td>
        <td>{{ $loyalty->no_hp }}</td>
        <td>{{ $loyalty->jumlah_stamp }}</td>
        <td>
            <a href="/loyalty/edit/{{ $loyalty->id }}">Edit</a>
            |
            <a href="/loyalty/delete/{{ $loyalty->id }}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>