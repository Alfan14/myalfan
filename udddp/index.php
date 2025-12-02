<!DOCTYPE html>
<html>
<head>
    <title>Update Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">
    <h1>Update Data di Database dengan PHP</h1>
    <h2>Update data dari database</h2>
    <h3>www.unipma.ac.id</h3>
</div>

<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>

<h3>Edit data</h3>

<?php
include 'koneksi.php'; // Menggunakan file koneksi
$npm = $_GET['npm']; // Mengambil NPM dari URL parameter

// Query untuk mengambil data mahasiswa yang akan diedit berdasarkan NPM
$query_mysql = mysql_query("SELECT * FROM mahasiswa WHERE npm='$npm'") or die(mysql_error());

// Loop untuk mengambil satu baris data (karena NPM unik)
while($data = mysql_fetch_array($query_mysql)){
?>

<form action="update.php" method="post">
<table>
    <tr>
        <td>NPM</td>
        <td>
            <input type="hidden" name="npm" value="<?php echo $data['npm'] ?>">
            <?php echo $data['npm'] ?>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
        </td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>
            <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Simpan">
        </td>
    </tr>
</table>
</form>

<?php } // Penutup while loop ?> 

</body>
</html>
