<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Jika form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip']; // Pastikan NIP angka
    $mapel = $_POST['mapel'];

    $sql = "UPDATE guru SET nama='$nama', nip='$nip', mapel='$mapel' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../halaman_admin.php?page=guru");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Edit Guru</h2>
<form method="POST" action="">
    Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    NIP: <input type="text" name="nip" value="<?php echo $row['nip']; ?>" required><br>
    Mata Pelajaran: <input type="text" name="mapel" value="<?php echo $row['mapel']; ?>" required><br>
    <button type="submit" name="submit">Update</button>
</form>
