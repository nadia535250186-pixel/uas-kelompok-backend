<h1>Edit Loyalty</h1>

<form action="/loyalty/update/{{ $loyalty->id }}" method="POST">
    @csrf

    <p>Nama Pelanggan</p>
    <input type="text" name="nama_pelanggan" value="{{ $loyalty->nama_pelanggan }}">

    <p>No HP</p>
    <input type="text" name="no_hp" value="{{ $loyalty->no_hp }}">

    <p>Jumlah Stamp</p>
    <input type="number" name="jumlah_stamp" value="{{ $loyalty->jumlah_stamp }}">

    <br><br>

    <button type="submit">Update</button>
</form>

<br>

<a href="/loyalty">Kembali</a>