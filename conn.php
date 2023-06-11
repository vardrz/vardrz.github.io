<?php

$conn = mysqli_connect("localhost", "root", "faridkaka8", "vard");
$data = mysqli_query($conn, "SELECT * FROM data")->fetch_assoc();
$projek = mysqli_query($conn, "SELECT * FROM projek");
