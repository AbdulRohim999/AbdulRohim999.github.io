<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'databasepondok';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>