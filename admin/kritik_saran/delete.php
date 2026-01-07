<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM feedback WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../halaman_admin.php?page=feedback");
} else {
    echo "Error: " . $conn->error;
}
?>