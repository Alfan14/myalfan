<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 9 PEMROGRAMAN WEB</title>
</head>
<body>

<?php
  // Cara pertama mendeklarasikan array multidimensi (Asosiatif)
  print ("CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>");
  $buah = array (
    "apel" => array("warna" => "merah", "rasa" => "manis"),
    "pisang" => array("warna" => "kuning", "rasa" => "manis")
  );

  print ("Warna buah apel adalah: <br/>");
  print ($buah['apel']['warna']); // Mengakses array asosiatif level 2

  print ("<br/>Warna buah pisang adalah: <br/>");
  print ($buah['pisang']['warna']);

  echo "<br/><br/>";

  // Cara kedua mendeklarasikan array multidimensi (Numerik)
  print ("CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>");
  $buah2 = array (
    array("Merah", "Manis"), // Index [0]
    array("Kuning", "Manis")  // Index [1]
  );

  // Output: Merah . Manis
  echo $buah2[0][0] . " . " . $buah2[0][1] . "<br/>";
  // Output: Kuning . Manis
  echo $buah2[1][0] . " . " . $buah2[1][1] . "<br/>";

?>

</body>
</html>
