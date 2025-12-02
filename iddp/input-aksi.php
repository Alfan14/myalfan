<?php 
include 'koneksi.php';
$npm = $_POST['npm']; 
$nama = $_POST['nama'];
 $alamat = $_POST['alamat']; 
$kelas = $_POST['kelas']; 
mysql_query("INSERT INTO mahasiswa (npm, nama, alamat, kelas) VALUES ('$npm', '$nama', '$alamat', '$kelas')");
header(“location:index.php?pesan=input”);
?>
