<?php
include '../../connection.php';

if (isset($_POST['submit'])) {
    $nama_kegiatan = $_POST['nama_kegiatan'];

    // Upload Gambar
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);
     
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) { // Perbaikan fungsi
        // Menyimpan data ke database
        $sql = "INSERT INTO galeri (nama_kegiatan, image) VALUES ('$nama_kegiatan', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../halaman_admin.php?page=galeri");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<h2>Tambah Galeri </h2>
<form method="POST" action="" enctype="multipart/form-data">
    Nama Kegiatan: <input type="text" name="nama_kegiatan" required><br>
    Gambar: <input type="file" name="image" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>
