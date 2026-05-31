<h1>Edit Menu</h1>

<form action="/menu/update/{{ $menu->id }}" method="POST">
    @csrf

    <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}">

    <button type="submit">Update</button>
</form>