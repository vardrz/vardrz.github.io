<?php
// date_default_timezone_set('Asia/Jakarta');
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Project</title>
</head>

<body>
    <?php
    if (!isset($_GET['key'])) {
        if (isset($_GET['error'])) {
            echo "<script>alert('Password Salah!');</script>";
        }
        echo "<script>var key = prompt('Akses Key!');window.location = '?key=' + key;</script>";
    } else {
        $key = $_GET['key'];
        if (!password_verify($key, $data['key'])) {
            header('location:?error=salah');
        } else {
    ?>
            <a href="addProjek.php">+ Tambah Projek</a>
            <p />
            <ol>
                <?php foreach ($projek as $p) : ?>
                    <li><a href="detailProjek.php?id=<?= $p['id']; ?>"><?= $p['title']; ?></a></li>
                <?php endforeach; ?>
            </ol>

    <?php
        }
    }
    ?>
</body>

</html>