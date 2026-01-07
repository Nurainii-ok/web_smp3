<?php
include '../connection.php';

// Username dan password admin
$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);

// Periksa apakah username sudah ada di database
$sql_check = "SELECT COUNT(*) FROM admin WHERE username = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $username);
$stmt_check->execute();
$stmt_check->bind_result($count);
$stmt_check->fetch();
$stmt_check->close();

if ($count > 0) {
    echo "Username sudah ada. Tidak dapat menambahkan admin dengan username yang sama.";
} else {
    // Jika username belum ada, tambahkan ke tabel
    $sql_insert = "INSERT INTO admin (username, password) VALUES (?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("ss", $username, $password);

    if ($stmt_insert->execute()) {
        echo "Admin berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan admin.";
    }
    $stmt_insert->close();
}

$conn->close();
?>
