<?php

include 'conn.php';

$id = $_POST['id'];
$title = $_POST['title'];
$date = $_POST['date'];
$desc = $_POST['desc'];
$demo = $_POST['demo'];
$img = $_POST['img'];
$tag = $_POST['tag'];
$build = $_POST['build'];

$query = "UPDATE projek SET
                title='$title',
                tgl='$date',
                desk='$desc',
                demo='$demo',
                img='$img',
                tag='$tag',
                build='$build'
            WHERE id=$id";
// echo $query;
// die;
mysqli_query($conn, $query);
header('location:projek.php');
