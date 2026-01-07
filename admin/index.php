<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }
        .hero {
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?clean,environment') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center; 
            background-attachment: fixed;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 128, 0, 0.6);
            z-index: 1;
        }
        .hero-content {
            z-index: 2;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 3rem;
            color: #004d40;
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .btn {
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }
        .btn-success {
            background-color: #27ae60;
        }
        .btn-success:hover {
            background-color: #229954;
        }
        .btn-primary {
            background-color: #3498db;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Selamat Datang!</h1>
            <div class="mt-4">
                <a href="login.php" class="btn btn-primary">Masuk</a>
            </div>
        </div>
    </section>

</body>
</html>
