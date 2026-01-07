<?php
include '../connection.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Periksa apakah username sudah ada di database
    $sql_check = "SELECT COUNT(*) FROM admin WHERE username = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $stmt_check->bind_result($count);
    $stmt_check->fetch();
    $stmt_check->close();

    if ($count > 0) {
        // Jika username sudah ada
        echo "<script>alert('Username sudah terdaftar. Gunakan username lain.'); window.location.href='register.php';</script>";
    } else {
        // Simpan data admin baru
        $sql_insert = "INSERT INTO admin (username, password) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ss", $username, $password);

        if ($stmt_insert->execute()) {
            // Redirect ke halaman login setelah registrasi berhasil
            header("Location: login.php");
            exit();
        } else {
            echo "<script>alert('Gagal registrasi. Silakan coba lagi.'); window.location.href='register.php';</script>";
        }

        $stmt_insert->close();
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f7f6;
        }
        .login-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 2rem;
            color: #004d40;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn {
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 50px;
        }
        .btn-primary {
            background-color: #3498db;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
    </style>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center">Registrasi Admin</h2>
        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrasi</button>
        </form>
    </div>
</body>
</html>
