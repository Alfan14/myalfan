<?php 
  include 'koneksi.php'
  $npm = $_GET[‘npm’];
  mysql_query("DELETE FROM mahasiswa WHERE npm='$npm'") or die(mysql_error());

  header("location:index.php?pesan=hapus");
?>
