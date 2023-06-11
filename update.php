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
    <title>Update Data</title>
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

            <form action="updateData.php" method="POST">
                <input type="hidden" name="oldemail" value="<?= $data['email']; ?>"><br>
                <input type="text" name="email" value="<?= $data['email']; ?>"><br>
                <input type="text" name="github" value="<?= $data['github']; ?>"><br>
                <textarea name="deskripsi" cols="30" rows="10"><?= $data['deskripsi']; ?></textarea><br>
                <button type="submit">Update</button>
            </form>

    <?php
        }
    }
    ?>
</body>

</html>