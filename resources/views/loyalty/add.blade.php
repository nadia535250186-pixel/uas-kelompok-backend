<h1>Tambah Loyalty</h1>

<form action="/loyalty" method="POST">
    @csrf

    <p>Nama Pelanggan</p>
    <input type="text" name="nama_pelanggan">

    <p>No HP</p>
    <input type="text" name="no_hp">

    <p>Jumlah Stamp</p>
    <input type="number" name="jumlah_stamp" value="0">

    <br><br>

    <button type="submit">Simpan</button>
</form>

<br>

<a href="/loyalty">Kembali</a>