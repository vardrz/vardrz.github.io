<?php

include 'conn.php';

$title = $_POST['title'];
$date = $_POST['date'];
$desc = $_POST['desc'];
$demo = $_POST['demo'];
$img = $_POST['img'];
$tag = $_POST['tag'];
$build = $_POST['build'];

$query = "INSERT INTO projek (title, tgl, desk, demo, img, tag, build) VALUES ('$title','$date','$desc','$demo','$img','$tag','$build')";

mysqli_query($conn, $query);
header('location:projek.php');
