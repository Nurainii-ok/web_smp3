<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM prestasi_non WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../halaman_admin.php?page=prestasi_non");
} else {
    echo "Error: " . $conn->error;
}
?>