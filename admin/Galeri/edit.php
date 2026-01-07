<?php
include '../../connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM galeri WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $nama_kegiatan = $_POST['nama_kegiatan'];

    if ($_FILES['image']['name']) {
        // Update gambar jika ada gambar baru
        $image = $_FILES['image']['name'];
        $target = "Galeri/upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $image = $row['image'];
    }

    $sql = "UPDATE galeri SET nama_kegiatan='$nama_kegiatan', image='$image' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="" enctype="multipart/form-data">
    
</form>