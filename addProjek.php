<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Projek</title>
</head>

<body>
    <form action="insertProjek.php" method="POST">
        <input type="text" name="title" size="60" placeholder="Judul Projek"><br>
        <input type="text" name="date" size="60" placeholder="Tanggal"><br>
        <input type="text" name="demo" size="60" placeholder="Link Projek"><br>
        <input type="text" name="tag" size="60" placeholder="Nama Singkatan"><br>
        <input type="text" name="build" size="60" placeholder="Dibuat Dengan"><br>
        <input type="text" name="img" size="60" placeholder="Link Gambar"><br>
        <textarea name="desc" cols="57" rows="30">Isi Deskripsi</textarea><br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>