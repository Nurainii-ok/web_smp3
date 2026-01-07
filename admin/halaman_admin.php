<?php
// Menentukan halaman yang aktif
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><img src="../upload/logo.png" width="40px" height="40px" alt="">
                <span>SMP Negeri 3 Malang</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="halaman_admin.php?page=dashboard" class="<?= ($page == 'dashboard') ? 'active' : '' ?>">
                        <span class="las la-igloo"></span> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=guru" class="<?= ($page == 'guru') ? 'active' : '' ?>">
                        <span class="las la-users"></span> <span>Guru</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=prestasi_akademik" class="<?= ($page == 'prestasi_akademik') ? 'active' : '' ?>">
                        <span class="las la-clipboard-list"></span> <span>Prestasi Akademik</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=prestasi_non" class="<?= ($page == 'prestasi_non') ? 'active' : '' ?>">
                        <span class="las la-shopping-bag"></span> <span>Prestasi Non Akademik</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=berita" class="<?= ($page == 'berita') ? 'active' : '' ?>">
                        <span class="las la-receipt"></span> <span>Berita</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=feedback" class="<?= ($page == 'feedback') ? 'active' : '' ?>">
                        <span class="las la-user-circle"></span> <span>Kritik dan Saran</span></a>
                    </li>
                    <li>
                        <a href="halaman_admin.php?page=galeri" class="<?= ($page == 'galeri') ? 'active' : '' ?>">
                        <span class="las la-user-circle"></span> <span>Galeri</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="la la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
        </header>
    </nav>
    
    <!-- Konten Utama -->
    <div class="container">
        <?php
        // Memuat halaman sesuai dengan parameter 'page'
        switch ($page) {
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'guru':
                include 'Guru/guru.php';
                break;
            case 'prestasi_akademik':
                include 'akademik/tampil.php';
                break;
            case 'prestasi_non':
                include 'nonakademik/tampil.php';
                break;
            case 'berita':
                include 'berita/tampil_berita.php';
                break;
            case 'feedback':
                include 'kritik_saran/tampil_feedback.php';
                break;
            case 'galeri';
                include 'Galeri/tampil.php';
                break;
           default:
                echo "<p>Halaman tidak ditemukan!</p>";
                break;
        }
        ?>
    </div>
</body>
</html>