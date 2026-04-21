<!DOCTYPE html>
<html>
<head>
    <title>Edit Minuman</title>
</head>
<body>

<h2>Edit Data Minuman</h2>

<form action="/update/{{ $minuman->id }}" method="POST">
    @csrf

    <input type="text" name="user" value="{{ $minuman->user }}" placeholder="Nama User">
    <br><br>

    <input type="text" name="jenis_minuman" value="{{ $minuman->jenis_minuman }}" placeholder="Jenis Minuman">
    <br><br>

    <input type="text" name="brand" value="{{ $minuman->brand }}" placeholder="Brand / Toko">
    <br><br>

    <input type="number" name="rating" value="{{ $minuman->rating }}" placeholder="Rating">
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>