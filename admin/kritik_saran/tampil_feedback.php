<style>
table {
    width: 1000px;
    border-collapse: collapse;
    margin-top: 50px;
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

button {
    margin-left: 380px;
    margin-top: 100px;
    padding: 5px 10px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #c82333;
}
</style>

<?php
include '../connection.php';

$sql = "SELECT * FROM feedback ORDER BY submitted_at ASC";
$result = $conn->query($sql);
?>
<br><br><br>
<table border="1">
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Dikirim Pada</th>
        <th>Aksi</th>
    </tr>
    <?php $no=1; ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['submitted_at']; ?></td>
            <td>
                <a href="kritik_saran/delete.php?id=<?php echo $row ['id']; ?>" onlick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
</table>