<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM prestasi_akademik WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../halaman_admin.php?page=prestasi_akademik");
} else {
    echo "Error: " . $conn->error;
}
?>