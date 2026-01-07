<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "web_spenti";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Data guru yang akan ditambahkan
$nama_guru = "Budi Santoso";
$nip_guru = "01234586";
$mata_pelajaran = "Matematika";

// Query SQL untuk menambahkan data guru
$sql = "INSERT INTO guru (nama, nip, mata_pelajaran) VALUES ('$nama_guru', '$nip_guru', '$mata_pelajaran')";

// Eksekusi query dan periksa apakah berhasil
if ($conn->query($sql) === TRUE) {
    echo "Data guru berhasil ditambahkan.";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
