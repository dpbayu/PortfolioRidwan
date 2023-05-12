<?php
    $db_host = 'localhost'; // Nama Server
    $db_user = 'root'; // User Server
    $db_pass = ''; // Password Server
    $db_name = 'portfolioridwan'; // Nama Database
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$db) {
    die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
    }
?>