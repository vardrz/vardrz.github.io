<?php
include 'conn.php';

$id = $_GET['id'];
$d = mysqli_query($conn, "SELECT * FROM projek WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - <?= $d['title']; ?></title>
</head>

<body>
    <a href="deleteProjek.php?id=<?= $id; ?>" onclick="return confirm('Yakin?')">- Delete Project Ini</a>
    <br>
    <form action="updateProjek.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id']; ?>"><br>
        <input type="text" name="title" value="<?= $d['title']; ?>" size="60"><br>
        <input type="text" name="date" value="<?= $d['tgl']; ?>" size="60"><br>
        <input type="text" name="demo" value="<?= $d['demo']; ?>" size="60"><br>
        <input type="text" name="tag" value="<?= $d['tag']; ?>" size="60"><br>
        <input type="text" name="build" value="<?= $d['build']; ?>" size="60"><br>
        <input type="text" name="img" value="<?= $d['img']; ?>" size="60"><br>
        <textarea name="desc" cols="57" rows="30"><?= $d['desk']; ?></textarea><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>