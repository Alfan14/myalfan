<html>
<head>
    <title>Praktikum String dan Tanggal</title>
</head>
<body>
<?php
  $kalimat = "Universitas PGRI Madiun";
  // Fungsi Manipulasi String
  printf("Hasil Strlen : %s<br>\n", strlen($kalimat));       // Menghitung panjang string
  printf("Hasil Strtoupper : %s<br>\n", strtoupper($kalimat)); // Mengubah semua huruf menjadi kapital
  printf("Hasil Strtolower : %s<br>\n", strtolower($kalimat)); // Mengubah semua huruf menjadi huruf kecil
  printf("Hasil Ucfirst : %s<br>\n", ucfirst($kalimat));     // Mengubah huruf pertama menjadi kapital
  printf("Hasil Ucwords : %s<br>\n", ucwords($kalimat));     // Mengubah huruf pertama setiap kata menjadi kapital
  printf("Aslinya : $kalimat<br>\n");
  // Fungsi Tanggal
  printf("Tanggal Sekarang : %s ", Date("d F Y")); 
  echo "<br>";
?>
</body>
</html>
