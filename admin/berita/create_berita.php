<?php
include '../../connection.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Upload Gambar
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);
     
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) { // Perbaikan fungsi
        // Menyimpan data ke database
        $sql = "INSERT INTO news (title, content, author, image) VALUES ('$title', '$content', '$author', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../halaman_admin.php?page=berita");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<h2>Tambah Berita </h2>
<form method="POST" action="" enctype="multipart/form-data">
    Judul: <input type="text" name="title" required><br>
    Konten: <textarea name="content" required></textarea><br>
    Penulis: <input type="text" name="author" required><br>
    Gambar: <input type="file" name="image" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>
