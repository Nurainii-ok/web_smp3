<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Temon</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;;
            line-height: 1.8;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header Style */
        .image {
            text-align: center;
            margin: 20px 0;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Container Style */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .teks-berita h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
            color: #444;
        }

        .teks-berita p {
            text-align: left; /* Teks rata kiri */
            font-size: 1em;
            color: #555;
        }

        .teks-berita p::first-letter {
            font-size: 1.5em;
            font-weight: bold;
            color: #007BFF;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .teks-berita h2 {
                font-size: 1.5em;
            }

            .teks-berita p {
                font-size: 0.95em;
            }
        }

        @media (max-width: 480px) {
            .teks-berita h2 {
                font-size: 1.3em;
            }

            .teks-berita p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    
    <div class="news-content">
        <div class="teks-berita">
            <h2>Inovasi Telang Lemon (Temon) Membawa SMP Negeri 3 Menjadi Juara ke 3 Lomba Inotek Tingkat Kota Malang</h2>
            <div class="image">
                <img src="upload/Temon.jpg" alt="Temon">
            </div>
            <p>
                Salah satu program di SMP Negeri 3 Malang untuk melayani siswa dengan berbagai karakteristik ini ada satu program 
                sekolah yang bernama Benang Mass (Belajar Menyenangkan Bersama Anak Spesial).<br><br>

                Benang Mass selalu melakukan inovasi yang bisa digunakan untuk merangkul siswa ini agar mereka lebih bisa mempunyai 
                rasa percaya diri, komunikatif dan bisa bergaul di antara teman temannya.<br><br>

                Salah satu inovasi yang dilakukan Benang Mass ini adalah dengan mengajak siswa membuat produk makanan dan minuman bersama. 
                Produk ini dinamakan Temon (Telang dan Lemon). Sesuai namanya minuman atau makanan (puding) yang dibuat menggunakan perpaduan 
                bunga telang dan buah lemon.<br><br>

                Ada banyak manfaat dari bunga telang dan lemon. Karenanya makanan/minuman yang dibuat dengan kombinasi keduanya tidak hanya 
                sedap namun mengandung banyak nutrisi yang diperlukan oleh tubuh kita.<br><br>

                Hal yang sangat membanggakan ternyata inovasi pembuatan makanan dan minuman dengan bahan baku Telang dan Lemon (Temon) ini telah 
                membuat SMP Negeri 3 Malang menjadi juara tiga lomba inotek yang diadakan oleh Bappeda Malang.
            </p>
        </div>
    </div>
</body>
</html>
