<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
    // Setelah menghapus, arahkan kembali ke halaman berita
    header("Location: ../halaman_admin.php?page=berita");
    exit;
} else {
    echo "Error: " . $conn->error;
}


?>