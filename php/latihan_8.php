<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>

<?php
  // Cara pertama mendeklarasikan array 1 dimensi
  print ("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
  $kota[0] = "Yogyakarta";
  $kota[1] = "Jakarta";
  $kota[2] = "Malang";

  print ("Kota pilihanmu: " . $kota[2] . " "); // print adalah cara lain mencetak selain echo

  echo "<br/><br/>";

  // Cara kedua mendeklarasikan array 1 dimensi
    print ("CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
  $kota2 = array("Lombok", "Semarang", "Surabaya"); // Index dimulai dari 0 secara otomatis
    print ("Kota pilihanmu: " . $kota2[1]);

  echo "<br/><br/>";

  // Cara ketiga mendeklarasikan array dengan nilai index berupa teks, bukan angka (Array Asosiatif)
  print ("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
  $inisial_kota = array("YOG" => "Yogyakarta", "SBY" => "Surabaya");
  echo "Inisial SBY adalah kota: " . $inisial_kota['SBY'] . ".<br/>";
  ?>

</body>
</html>
