<?php
include '../connection.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Upload gambar
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);

    // Cek jika direktori upload tidak ada, buat direktori
    if (!is_dir('upload')) {
        mkdir('upload', 0777, true); // Membuat folder dengan izin yang benar
    }

    // Coba pindahkan file
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Menyimpan data ke database
        $sql = "INSERT INTO news (title, content, author, image) VALUES ('$title', '$content', '$author', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: tampil.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<h2>Tambah Berita</h2>
<form method="POST" action="" enctype="multipart/form-data">
    Judul: <input type="text" name="title" required><br>
    Konten: <textarea name="content" required></textarea><br>
    Penulis: <input type="text" name="author" required><br>
    Gambar: <input type="file" name="image" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>
