<?php
include '../../connection.php';

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $mapel = mysqli_real_escape_string($conn, $_POST['mapel']);
   
   $sql = "INSERT INTO guru (nama, nip, mapel) VALUES ('$nama', '$nip', '$mapel')";
   if ($conn->query($sql) === TRUE) {
    header("Location: ../halaman_admin.php?page=guru");
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   } 
}
?>

<h2>Tambah guru</h2>
<form method="POST" action="" enctype="multipart/form-data">
    Nama: <input type="text" name="nama" required><br>
    NIP: <input type="text" name="nip" required><br>
    Mata Pelajaran: <input type="text" name="mapel" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>