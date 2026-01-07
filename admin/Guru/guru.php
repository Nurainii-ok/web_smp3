<style>
table {
    width: 1000px;
    border-collapse: collapse;
    margin-top: 10px;
    margin-left: 380px;
    font-family: Arial, sans-serif;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
    text-transform: uppercase;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

a {
    text-decoration: none;
    color: #007BFF;
    margin-right: 10px;
}

a:hover {
    text-decoration: underline;
}

.button {
    margin-left: 380px;
    margin-top: 65px;
    display: inline-block;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    color: white;
    background: linear-gradient(135deg, #28a745, #218838);
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.button:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    transform: translateY(-2px);
}

.button:active {
    transform: translateY(1px);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}
</style>

<?php
include '../connection.php';

$sql = "SELECT * FROM guru ORDER BY id ASC";
$result = $conn->query($sql);
?>

<h2>Daftar Guru</h2>
<a href="Guru/create.php" class="button">Tambah Guru</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Mata Pelajaran</th>
        <th>Aksi</th>
    </tr>
    <?php $no=1; ?>
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nip']; ?></td>
            <td><?php echo $row['mapel']; ?></td>
            <td>
                <a href="Guru/view.php?id=<?php echo $row['id']; ?>">Baca</a>
                <a href="Guru/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="Guru/delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
