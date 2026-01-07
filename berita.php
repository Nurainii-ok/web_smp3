<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>
<body>
    <style>
   
    .card-container{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 100px;
        margin: 25px auto;
    }

    .grid-item img {
        width: 60%;
        height: auto;
    }

    .card{
        width: 325px;
        background-color: #f0f0f0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 2px 4px rgba(0,0,0,2);
        margin: 20px;
    }

    .card img {
        width: 325px;
        height: 250px;
        object-fit: cover;
    } 

    .card-content{
        padding: 16px;
    }

    .card-content h3{
        font-size: 28px;
        margin-bottom: 8px;
    }

    .card-content p{
        color: #666;
        font-size: 12px; /* Ukuran date */
        line-height: 1.2;
    }

    .card-content .btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #333;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 16px;
        color: #fff;
    }

    </style>

<div class="card-container">
    <div class="card">
        <img src="upload/beritapaskibra.jpg" alt="PASKIBRA BINTARALOKA">
        <div class="card-content">
            <h4>Bawa 3 Piala, PASKIBRA BINTARALOKA Menangkan Lagi LPBB Tingkat Provinsi</h4>
            <p class="date">September 23, 2024</p>
            <a href="index.php?page=berita_paskibra" 
               class="btn <?= ($page == 'berita_paskibra') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <div class="card">
        <img src="upload/Temon.jpg" alt="Inovasi Telang Lemon (Temon)">
        <div class="card-content">
            <h4>Inovasi Telang Lemon (Temon) Membawa SMP Negeri 3 Menjadi Juara ke 3 Lomba Inotek Tingkat Kota Malang</h4>
            <p class="date">September 22, 2024</p>
            <a href="index.php?page=berita_temon" 
               class="btn <?= ($page == 'berita_temon') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <div class="card">
        <img src="upload/Barakuda.jpg" alt="Barakuda Cempaka">
        <div class="card-content">
            <h4>Barakuda Cempaka Raih nomor Kejuaraan dalam Mitreka Satata Scout Competition 2024</h4>
            <p class="date">September 16, 2024</p>
            <a href="index.php?page=berita_barakuda" 
               class="btn <?= ($page == 'berita_barakuda') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <div class="card">
        <img src="upload/a.jpg" alt="Pramuka Bintaraloka">
        <div class="card-content">
            <h4>Pramuka Bintaraloka Raih Berbagai Kejuaraan dalam Ajang “GRAPIKA.COM”</h4>
            <p class="date">November 24, 2024</p>
            <a href="index.php?page=berita_grapika" 
               class="btn <?= ($page == 'berita_grapika') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <div class="card">
        <img src="upload/koperasi.jpg" alt="Jambore Koperasi">
        <div class="card-content">
            <h4>SMP Negeri 3 Malang Sabet Berbagai Kejuaraan dalam Jambore Koperasi 2024</h4>
            <p class="date">July 30, 2024</p>
            <a href="index.php?page=berita_jambore" 
               class="btn <?= ($page == 'berita_jambore') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <div class="card">
        <img src="upload/O2SN.jpg" alt="O2SN dan FLS2N">
        <div class="card-content">
            <h4>SMP Negeri 3 Malang Raih Gelar Kejuaraan dalam Ajang O2SN dan FLS2N Tingkat Provinsi</h4>
            <p class="date">July 18, 2024</p>
            <a href="index.php?page=berita_O2SN" 
               class="btn <?= ($page == 'berita_O2SN') ? 'active' : '' ?>">
                Baca Selengkapnya
            </a>
        </div>
    </div>
    <!--Halaman dinamis-->

<?php
include 'connection.php';

// Ambil semua berita dari database, urutkan dari yang terbaru
$sql = "SELECT * FROM news ORDER BY date DESC";
$result = $conn->query($sql);

// Periksa apakah ada berita
if ($result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
?>
    <div class="card">
        <img src="admin/berita/upload/<?php echo htmlspecialchars($row['image']); ?>" width="500" alt="Gambar Berita">
        <div class="card-content">
            <h4><?php echo htmlspecialchars($row['title']); ?></h4>
            <p class="date"><?php echo htmlspecialchars($row['date']); ?></p>
            <a href="admin/berita/view_berita.php?id=<?php echo $row['id']; ?>" class="btn">
                Baca Selengkapnya
            </a>
        </div>
    </div>
<?php 
    endwhile;
else:
    echo "<p>Tidak ada berita yang tersedia.</p>";
endif;
?>
</div>


</body>
</html>
