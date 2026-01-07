<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php echo $row['id']; ?>
<?php echo $row['nama']; ?>
<?php echo $row['nip']; ?>
<?php echo $row['mapel']; ?>
<a href="../halaman_admin.php?page=guru">Kembali</a>