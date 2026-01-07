<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM guru WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../halaman_admin.php?page=guru");
} else {
    echo "Error: " . $conn->error;
}
?>