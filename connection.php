<?php
$host = 'localhost';
$username = 'root'; // Ganti dengan username database Anda
$password = '';     // Ganti dengan password database Anda
$database = 'web_spenti'; // Nama database

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
