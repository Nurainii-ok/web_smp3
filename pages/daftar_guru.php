<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Non Akademik</title>
</head>
<body>
    <style> 

    table{
        width: 100%;
        font-size: 14px;
        color: #444;
        white-space: nowrap;
        border-collapse: collapse;
    }

    table>thead{
        background-color: #ffff;
        color: rgb(11, 11, 11);
    }

    table>thead th{
        padding: 20px;
    }

    table th, table td{
        border: 1px solid rgb(24,23,23);
        padding: 13px;
    }

    table>tbody>tr{
        background-color: antiquewhite;
        transition: 0.3s ease-in-out;
    }

    table>tbody>tr:nth-child(even){
        background-color: antiquewhite;
    }

    table>tbody>:hover{
        filter: drop-shadow(0 2px 6px #0002);
    }
    </style>


    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                <!--Halaman dinamis-->
            <?php
            include 'connection.php';

            // Ambil semua berita dari database, urutkan dari yang terlama
            $sql = "SELECT * FROM guru ORDER BY id ASC";
            $result = $conn->query($sql);

            // Periksa apakah ada berita
            $no = 1;
            if ($result->num_rows >0):
                while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['nip']); ?></td>
                        <td><?php echo htmlspecialchars($row['mapel']); ?></td>
                        <a href="Guru/berita/view_berita.php?id=<?php echo $row['id']; ?>">Lihat</a>
                </tr>
            <?php 
                endwhile;
            else:
                echo "<p>Tidak ada berita yang tersedia.</p>";
            endif;
            ?>
            </tbody>
            </tbody>
            
        </table>
    </div>

</body>
</html>