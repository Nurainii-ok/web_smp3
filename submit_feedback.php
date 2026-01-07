<style>
    /* Styling untuk container utama */
.feedback-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}


/* Pesan sukses */
.feedback-success {
    font-size: 24px;
    font-weight: bold;
    color: #28a745;
    margin-bottom: 15px;
}

/* Pesan error */
.feedback-error {
    font-size: 24px;
    font-weight: bold;
    color: #dc3545;
    margin-bottom: 15px;
}

/* Tombol kembali */
.feedback-container a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
}

.feedback-container a:hover {
    background-color: #0056b3;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submission</title>
</head>
<body>





    <div class="feedback-container">
        <?php
        include 'connection.php'; // Koneksi ke database

        // Ambil data dari form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Query untuk menyimpan data
        $sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Pesan sukses
            echo "<p class='feedback-success'>Terima kasih atas kritik dan saran Anda!</p>";
            echo "<a href='feedback_form.php'>Kembali ke Form</a>";
            echo "<a href='index.php?page=beranda'>Kembali ke Website</a>";
        } else {
            // Pesan error
            echo "<p class='feedback-error'>Terjadi kesalahan: " . $stmt->error . "</p>";
            echo "<a href='feedback_form.php' style='background-color: #dc3545;'>Coba Lagi</a>";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
