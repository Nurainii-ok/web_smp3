<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM prestasi_non WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $prestasi = $_POST['prestasi'];
    $nama = $_POST['nama'];
    $tingkat = $_POST['tingkat'];
    $date = $_POST['tanggal'];
    $penyelenggara = $_POST['penyelenggara'];

    $sql = "UPDATE prestasi_non SET prestasi='$prestasi', nama='$nama', tingkat='$tingkat', tanggal='$date', penyelenggara='$penyelenggara' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../halaman_admin.php?page=prestasi_non");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>

<h2>Edit Prestasi</h2>
<form method="POST" action="">
    No: <input type="int" name="id" value="<?php echo $row['id']; ?>" required><br>
    Prestasi yang diraih: <input type="text" name="prestasi" value="<?php echo $row['prestasi']; ?>" required><br>
    Nama Peraih: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    Tingkat: <input type="text" name="tingkat" value="<?php echo $row['tingkat']; ?>" required><br>
    Waktu: <input type="" name="tanggal" value="<?php echo $row['tanggal']; ?>" required><br>
    Penyelenggara: <input type="text" name="penyelenggara" value="<?php echo $row['penyelenggara']; ?>" required><br>
    <button type="submit" name="submit">Update</button>
</form>