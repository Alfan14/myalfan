<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Tanggal</title>
</head>
<body>
<?php
  $namahari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
  $namabulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
  "Juli", "Agustus", "September", "Oktober", "November", "Desember");

  echo $namahari[date("w")] . ", " . date("j") . " " . $namabulan[date("n")] . " " . date("Y") . "."; 
  ?>
  <br><br>
  <?php
  // === CONTOH FORMAT TANGGAL DAN WAKTU LAIN ===
    echo date("Y/m/d") . " . <br />"; // Menampilkan tanggal dengan format 2017/10/02
    echo date("d-m-Y") . " . <br />"; // Menampilkan tanggal dengan format 02-10-2017
    echo date("D F Y") . " . <br />"; // Menampilkan tanggal dengan format Tue Oct 2017
    echo date("h:i:s") . " . <br />"; // Menampilkan waktu dengan format 03:31:55
    echo date("l, d-m-Y H:i:s") . " . <br />"; // Menampilkan tanggal dan waktu lengkap 
  // Contoh: Tuesday, 02-10-2017 00:31:55
  ?>
</body>
</html>
