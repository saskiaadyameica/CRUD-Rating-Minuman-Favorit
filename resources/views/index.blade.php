<!DOCTYPE html>
<html>
<head>
    <title>CRUD Minuman</title>
</head>
<body>

<h2>Data Minuman Favorit</h2>

<form action="/store" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Nama User" required>
    <input type="text" name="jenis_minuman" placeholder="Jenis Minuman" required>
    <input type="text" name="brand" placeholder="Brand / Toko" required>
    <input type="number" name="rating" placeholder="Rating (1-10)" required>
    <button type="submit">Tambah</button>
</form>

<br>

<table border="1" cellpadding="10">
    <tr>
        <th>User</th>
        <th>Jenis Minuman</th>
        <th>Brand/Toko</th>
        <th>Rating</th>
        <th>Aksi</th>
    </tr>

    @foreach($minumans as $m)
    <tr>
        <td>{{ $m->user }}</td>
        <td>{{ $m->jenis_minuman }}</td>
        <td>{{ $m->brand }}</td>
        <td>{{ $m->rating }}</td>
        <td>
            <a href="/delete/{{ $m->id }}">Hapus</a> |
            <a href="/edit/{{ $m->id }}">Edit</a>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>