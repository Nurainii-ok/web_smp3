<?php
include '../../connection.php';

if (isset($_POST['submit'])) {
    $prestasi = $_POST['prestasi'];
    $nama = $_POST['nama'];
    $tingkat = $_POST['tingkat'];
    $date = $_POST['tanggal'];
    $penyelenggara = $_POST['penyelenggara'];

    // Menyimpan data ke database tanpa id karena biasanya auto increment
    $sql = "INSERT INTO prestasi_non (prestasi, nama, tingkat, tanggal, penyelenggara) 
            VALUES ('$prestasi', '$nama', '$tingkat', '$date', '$penyelenggara')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../halaman_admin.php?page=prestasi_non");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Tambah Prestasi</h2>
<form method="POST" action="" enctype="multipart/form-data">
    Prestasi yang diraih: <input type="text" name="prestasi" required><br>
    Nama Peraih: <input type="text" name="nama" required><br>
    Tingkat: <input type="text" name="tingkat" required><br>
    Waktu: <input type="text " name="tanggal"><br>
    Penyelenggara: <input type="text" name="penyelenggara"><br>
    <button type="submit" name="submit">Simpan</button>
</form>
