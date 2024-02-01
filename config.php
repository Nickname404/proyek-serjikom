<?php
$server = "localhost"; // nama server
$username = "root"; // username
$password = ""; // standarnya kosong
$database = "sertifikat"; // buat nama database harus sama

// Koneksi dan memilih database di server
$db = new mysqli($server, $username, $password, $database);
?>