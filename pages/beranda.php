<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
  <style>
    /* CSS untuk class hero */
.hero {
  padding: 180px 1px;
  background: url("upload/B.jpg") no-repeat center center/cover;
  color: black;
  text-align: left;
  display: flex;
  flex-direction: column;
  
}


.hero h1 {
  margin: 15px;
  font-size: 48px;
}

.hero p {
  font-size: 20px;
  margin: 20px;
}

.cta-btn {
  background: #1d38e8;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

.cta-btn {
  background: #c53715;
}

    /* BERANDA */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
}

/* CSS untuk Sambutan Kepala Sekolah */
#kepalasekolah {
  position: relative;
  padding: 50px 20px;
  text-align: center;
  background-color: #f9f9f9;
}

#kepalasekolah div {
  display: flex;
  align-items: center; /* Menyejajarkan elemen secara vertikal */
  justify-content: center; /* Elemen sejajar di tengah secara horizontal */
  position: relative;
  z-index: 2; /* Pastikan elemen berada di atas lingkaran */
  border-radius: 10px;
}

#Kepala_sekolah img {
  max-width: 300px; /* Atur ukuran gambar */
  padding-left:50px; 
  height: auto;
  margin-right: 50px; /* Jarak antara gambar dan teks */
  border-radius: 10px; /* border-radius kepsek img */
  z-index: 3; /* Gambar berada di atas lingkaran */ /* Agar muncul di atas elemen lain */
  
}

.kepsek h4 {
  margin: 0; /* Hilangkan margin default pada h4 */
  text-align: left;
  max-width: 500px; /* Atur lebar maksimum teks */
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 3; /* Teks berada di atas lingkaran */ /* Agar muncul di atas elemen lain */
}



/* Styling untuk bagian Fasilitas */
#fasilitas {
  width: 100%;
  padding: 50px;
  justify-content: center;
  text-align: center;
  background-color: #faf2dc; /* Warna latar bagian fasilitas */
}
.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #333;
}

.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 50px; /* Jarak antar item grid */
  justify-items: center; /* Item dalam grid diratakan di tengah */
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan */
  padding: 20px; /* tinggi card */
  text-align: center;
  transition: transform 0.7s, background-color 0.3s; /* Animasi saat hover */
  width: 200px; /* Lebar setiap card */
  height: auto;
}

.card img {
  width: 100px; /* Ukuran gambar */
  height: 100px;
  object-fit: contain;
  margin-bottom: 10px;
}

.card p {
  font-size: 16px;
  color: #333;
  margin-top: 10px;
}

.card:hover {
  transform: scale(1.1); /* Membesarkan card saat di-hover */
  background-color: #E5D9B6; /* Warna latar saat hover */
}

/* CSS UNTUK GALERI */
.judul {
    position: absolute; /* Posisi absolut terhadap parent */
    margin-top: 5px; /* Jarak dari atas */
    left: 50%; /* Horizontal tengah */
    transform: translateX(-50%); /* Koreksi posisi horizontal */
    font-size: 24px;
    font-weight: bold;
    color: #333;
}


#galeri {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 200px;
  gap: 30px; /* Jarak antar card galeri */
  justify-content: center;
  text-align: center;
  padding: 40px 55px;
  margin: 20px auto 100px auto; /* Margin atas, kanan, bawah, kiri */
  max-width: 1200px; /* Batasi lebar maksimum galeri agar tetap terpusat */
  min-height: 500px; /* Pastikan tinggi minimal galeri cukup untuk semua baris */
  box-sizing: border-box;
}

#galeri img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
  align-items: center;
}

#galeri img:hover {
  transform: scale(1.1);
}
</style>

<div class="hero">
            <h1 >Selamat Datang <br>di SMP Negeri 3 Malang</h1>
            <p>Bina Taruna Adiloka</p>
</div>

    <section id="kepalasekolah">
        <h2>Sambutan Kepala Sekolah</h2>
        <div>
            <div id="Kepala_sekolah">
                <img src="upload/Kepala sekolah.png" alt="img">
            </div>
              <div class="kepsek">
              <h4>Assalamualaikum Wr.Wb.<br>
                  Puji syukur kami panjatkan ke hadirat Allah SWT, 
                  Tuhan Yang Maha Esa yang telah memberikan rahmat dan 
                  anugerah-Nya sehingga web SMPN 3 dapat muncul kembali 
                  setelah mengalami gangguan beberapa waktu yang lalu. 
                  Web SMPN 3 Malang ini berisi gambaran tentang awal berdirinya sekolah, 
                  profil umum sekolah dan segala kegiatan yang ada di sekolah.
              </h4>
             </div>
        </div>
    </section>

    <section id="fasilitas">
        <div class="title">FASILITAS</div>
        <div class="grid">
          <div class="card">
            <img src="upload/Kelas.png" alt="Icon">
            <p>Ruang Belajar (Kelas)</p>
          </div>
          <div class="card">
            <img src="upload/book_5386466.png" alt="Icon">
            <p> Ruang-Ruang Belajar Lainnya</p>
          </div>
          <div class="card">
            <img src="upload/office.png" alt="Icon">
            <p>Ruang Kantor</p>
          </div>
          <div class="card">
            <img src="upload/Masjid.png" alt="Icon">
            <p>Ruang Penunjang</p>
          </div>
          <div class="card">
            <img src="upload/football_8036053.png" alt="Icon">
            <p>Lapangan Olahraga & Upacara</p>
          </div>
          <div class="card">
            <img src="upload/tree_17740016.png" alt="Icon">
            <p>Area Hijau</p>
          </div>
      </section>
      
    <section id="galeri">
      <div class="judul">GALERI</div>
        <div class="gridgaleri"></div>
       <div id="galeri" alt="img">
         <?php
          include 'connection.php';

          // Ambil semua berita dari database, urutkan dari yang terbaru
          $sql = "SELECT * FROM galeri ORDER BY id DESC";
          $result = $conn->query($sql);

          // Periksa apakah ada berita
          if ($result->num_rows > 0):
              while ($row = $result->fetch_assoc()):
          ?>
              <div class="">
                  <img src="admin/galeri/upload/<?php echo htmlspecialchars($row['image']); ?>" width="500" alt="Gambar Berita">
                  <div class="card-content">
                      <h4><?php echo htmlspecialchars($row['nama_kegiatan']); ?></h4>
                      <a href="admin/galeri/view.php?id=<?php echo $row['id']; ?>"></a>
                  </div>
              </div>
          <?php 
    endwhile;
else:
    echo "<p>Tidak ada berita yang tersedia.</p>";
endif;
?>
     </div>
     </div>
    </section>
  </footer>
</body>
</html>

        
                
            
 
    