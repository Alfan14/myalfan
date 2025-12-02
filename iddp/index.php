<!DOCTYPE html>
<html>
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">
    <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
    <h2>Menampilkan data dari database</h2>
    <h3>www.unipma.ac.id/h3>
</div>

<?php
// Cek pesan notifikasi dari URL (misalnya: index.php?pesan=input)
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "Data berhasil di input.";
    } elseif($pesan == "update"){
        echo "Data berhasil di update.";
    } elseif($pesan == "hapus"){
        echo "Data berhasil di hapus.";
    }
}
?>

<br/>
<a class="tombol" href="input.php">+ Tambah Data Baru</a>
<br/>

<h3>Data User</h3>
<table border="1" class="table">
    ```

### B. Header Tabel dan Looping Data (`IDDP_4.jpeg` - Lanjutan)

```html
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Opsi</th> </tr>

    <?php
    include "koneksi.php"; 
    // Query untuk mengambil semua data
    $query_mysql = mysql_query("SELECT * FROM mahasiswa") or die(mysql_error());
    
    // Looping data dan menampilkan dalam baris tabel
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    
    <tr>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['kelas']; ?></td>
        <td>
<a class="edit" href="edit.php?npm=<?php echo $data['npm']; ?>">Edit</a> | 
<a class="hapus" href="hapus.php?npm=<?php echo $data['npm']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } // Penutup while loop ?> 
</table>
</body>
</html>
