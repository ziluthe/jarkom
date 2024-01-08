<?php
// koneksi.php

$server = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "masuk"; // Ganti dengan nama database Anda

$db = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
