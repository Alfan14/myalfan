<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman Buku</title>
</head>
<body>
<h2>Data Peminjaman Perpustakaan Kota Madiun</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Peminjam</th>
        <th>Email</th>
        <th>Judul Buku</th>
        <th>Tanggal Pinjam</th>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tabel_perpus");
    while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama_peminjam']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['judul_buku']; ?></td>
        <td><?php echo $data['tgl_pinjam']; ?></td>
    </tr>
    <?php } ?> 
</table>
</body>
</html>
