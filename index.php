<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
// Menentukan halaman yang aktif
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
    <header>
        <nav>
                <div id="logo">
                <img src="foto/logo.png">
                </div>
                <div class="nama">
                    <h4>SMP Negeri 3 Malang<br></h4>
                    <h5>Bina Taruna Adiloka</h5>
                </div>
            </div>

       
            <ul>
                <li><a href="index.php?page=beranda" class="<?= ($page == 'beranda') ? 'active' : ''?>">Beranda</a></li>
                <li>
                    <a href="#profilsekolah">Profil Sekolah</a>
                    <ul class="dropdown">
                        <li><a href="index.php?page=visi_misi" class="<?= ($page == 'visi_misi') ? 'active' : ''?>">Visi,Misi<br>& Tujuan Sekolah</a></li>
                        <li><a href="index.php?page=sejarah" class="<?= ($page == 'sejarah') ? 'active' : ''?>">Sejarah</a></li>
                        <li><a href="index.php?page=rapor_pendidikan" class="<?= ($page == 'rapor_pendidikan') ? 'active' : ''?>">Rapor Pendidikan</a></li>
                        <li><a href="file/Daftar-Nama-GURU-2024-2025-SMT-GANJIL-PAKAI.pdf" href="#daftar_guru"
                            target="_blank">Daftar Guru</a></li>
                    </ul>
                </li> 
                <li><a href="#perpustakaan"></a><a href="https://digilib.smpn3-mlg.sch.id/" 
                    target="_blank">Perpustakaan</a></li><!--untuk membuka tautan (link) di tab atau 
                    jendela browser baru-->
                <li><a href="index.php?page=ekstrakurikuler" class="<?= ($page == 'ekstrakurikuler') ? 'active' : ''?>">Ekstrakurikuler</a></li>
                <li>
                    <a href="#prestasi">Prestasi</a>
                    <ul class="dropdown">
                        <li><a href="index.php?page=prestasi_akademik" class="<?= ($page == 'prestasi_akademik') ? 'active' : ''?>">Akademik</a></li>
                        <li><a href="index.php?page=prestasi_non" class="<?= ($page == 'prestasi_non') ? 'active' : ''?>">Non<br>Akademik</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=berita" class="<?= ($page == 'berita') ? 'active' : ''?>">Berita</a></li>
                
            </ul>
        </div>
        </nav>
         
    </header>

   <!-- Konten Utama -->
<div class="container">
<?php
// Menggunakan switch case untuk memuat halaman
switch ($page) {
case 'beranda':
include 'pages/beranda.php';
break;
case 'visi_misi':
include 'pages/visi_misi.php';
break;
case 'sejarah':
include 'pages/sejarah.php';
break;
case 'rapor_pendidikan':
include 'pages/rapor_pendidikan.php';
break;
case 'ekstrakurikuler':
include 'pages/ekstrakurikuler.php';
break;
case 'berita':
include 'pages/berita.php';
break;
case 'prestasi_akademik':
include 'pages/prestasi_akademik.php';
break;
case 'prestasi_non':
include 'pages/prestasi_non.php';

break;
default:
echo "<p>Halaman tidak ditemukan!</p>";
break;
}
?>
</div>

  <footer>
      <div class="gbrlogo">
          <div id="logo_foto">
              <img src="foto/logo.png" alt="Logo">
          </div>
          <div class="logo_tulisan">
              <span>
                  <h4>SMP Negeri 3 Malang</h4>
                  <h5>Bina Taruna Adiloka</h5>
              </span>
          </div>
      </div>
    <div class="info">
      <div class="footer-info">
          <div class="gbrlocation">
              <div id="location">
                  <img src="foto/location.png" alt="Location">
              </div>
              <div class="location">
                  <h6>Jl. Dr. Cipto No.20, 3, Klojen, Kec. Klojen,<br> Kota Malang, Jawa Timur 65111</h6>
              </div>
          </div>

          <div class="gbrtelephone">
              <div id="telephone">
                  <img src="foto/telephone.png" alt="Telephone">
              </div>
              <div class="telephone">
                  <h6>0341-362612</h6>
              </div>
          </div>

          <div class="gbremail">
              <div id="email">
                  <img src="foto/email.png" alt="Email">
              </div>
              <div class="email">
                  <h6>smpn3mlg@smpn3-mlg.sch.id</h6>
              </div>
          </div>
      </div>


      <div class="linked-info">
          <div class="gbrinstagram">
              <div id="instagram">
                  <img src="foto/instagram.png">
              </div>
              <div class="instagram">
                  <h6 a href=""></a><a href="https://www.instagram.com/spenti_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                  class="hover-effect" target="_blank">spenti</h6 a>
              </div>
          </div>

          <div class="gbrtiktok">
              <div id="tiktok">
                  <img src="foto/tiktok.png">
              </div>
              <div class="tiktok">
                  <h6 a href=""></a><a href="https://www.tiktok.com/@smpn3malang?_t=8rIDSXbDVLk&_r=1"
                  class="hover-effect" target="_blank">SMP Negeri 3 Malang</h6 a>
              </div>
          </div>

          <div class="gbryoutube">
              <div id="youtube">
                  <img src="foto/youtube.png">
              </div>
              <div class="youtube">
                  <h6 a href=""></a><a href="https://www.youtube.com/@SMPN3Malang" 
                  class="hover-effect" target="_blank">SMPN 3 Malang</h6 a>
              </div>
          </div>
      </div>

      <a href="feedback_form.php" class="btn saran">Kritik dan Saran</a>

      
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7902.
        5741609906245!2d112.63330707358365!3d-7.969254479432049!2m3!1f0!2f0!3f0!3m2!
        1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628317570c4db%3A0x2b9f9dcf0aa41aa6!2sSMP%20Negeri%203%20Malang!
        5e0!3m2!1sid!2sus!4v1731995635075!5m2!1sid!2sus" width="400" height="300" style="border:0;" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </footer>
</body>
</html>
        
                
            
 
    