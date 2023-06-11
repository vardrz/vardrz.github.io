<?php

include 'conn.php';

$id = $_GET['id'];

$query = "DELETE FROM projek WHERE id=$id";

mysqli_query($conn, $query);
header('location:projek.php');
