<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Akademik</title>
</head>
<body>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        font-size: 14px;
        color: #444;
        border-collapse: collapse;
        border-spacing: 0;
        margin: 0;
        padding: 0;
    }

    thead {
        background-color: #fff;
        color: rgb(11, 11, 11);
        display: table-header-group;
        position: relative;
    }

    thead tr, tbody tr {
        margin: 0;
        padding: 0;
    }

    thead th {
        padding: 13px;
        text-align: left;
    }

    table, thead, tbody, tr, th, td {
        border-collapse: collapse;
    }

    table th, table td {
        border: 1px solid rgb(24, 23, 23);
        padding: 13px;
    }

    tbody tr {
        background-color: antiquewhite;
        transition: 0.3s ease-in-out;
    }

    tbody tr:nth-child(even) {
        background-color: antiquewhite;
    }

 

    </style>

    <div  class="table-responsive" >
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Prestasi yang diraih</th>
                    <th>Nama Peraih</th>
                    <th>Tingkat</th>
                    <th>Waktu</th>
                    <th>Penyelenggara</th>
                </tr>
            </thead>
            <tbody>
        <!--Halaman dinamis-->
        <?php
        include 'connection.php';

        // Ambil semua berita dari database, urutkan dari yang terlama
        $sql = "SELECT * FROM prestasi_akademik ORDER BY id ASC";
        $result = $conn->query($sql);

        // Periksa apakah ada berita
        $no = 1;
        if ($result->num_rows >0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
            <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?php echo htmlspecialchars($row['prestasi']); ?></td>
                    <td><?php echo htmlspecialchars($row['nama']); ?></td>
                    <td><?php echo htmlspecialchars($row['tingkat']); ?></td>
                    <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
                    <td><?php echo htmlspecialchars($row['penyelenggara']); ?></td>
                    <a href="admin/berita/view_berita.php?id=<?php echo $row['id']; ?>">Lihat</a>
            </tr>
        <?php 
            endwhile;
        else:
            echo "<p>Tidak ada berita yang tersedia.</p>";
        endif;
        ?>
            </tbody>
        </table>
    </div>

</body>
</html>