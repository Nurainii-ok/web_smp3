<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM prestasi_akademik WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php echo $row['id']; ?>
<?php echo $row['prestasi']; ?>
<?php echo $row['nama']; ?>
<?php echo $row['tingkat']; ?>
<?php echo $row['tanggal']; ?>
<?php echo $row['penyelenggara']; ?>
<a href="../halaman_admin.php?page=prestasi_akademik">Kembali</a>
