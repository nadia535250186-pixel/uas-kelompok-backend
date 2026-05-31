<h1>Daftar Menu</h1>

<form action="/menu" method="POST">
    @csrf
    <input type="text" name="nama_menu" placeholder="Masukkan nama menu">
    <button type="submit">Tambah</button>
</form>

<hr>

<ul>
    @foreach ($menu as $item)
        <li>
            {{ $item->nama_menu }}

            <a href="/menu/edit/{{ $item->id }}">
                Edit
            </a>

            <a href="/menu/delete/{{ $item->id }}" onclick="return confirm('Yakin mau hapus?')">
                Hapus
            </a>
        </li>
    @endforeach
</ul>