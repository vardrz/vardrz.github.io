<?php

include 'conn.php';

$oldemail = $_POST['oldemail'];
$email = $_POST['email'];
$github = $_POST['github'];
$deskripsi = $_POST['deskripsi'];

$query = "UPDATE data SET email='$email', github='$github', deskripsi='$deskripsi' WHERE email='$oldemail'";
mysqli_query($conn, $query);
header('location:update.php');
