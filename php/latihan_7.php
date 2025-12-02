<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 7 PEMROGRAMAN WEB</title>
</head>
<body>

<form method="get">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" /></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim" /></td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="submit" value="Simpan" />&nbsp;
            <input type="reset" name="reset" value="Reset" />
        </td>
    </tr>
</table>
</form>

<?php
if(isset($_GET['submit'])) { // Memeriksa apakah tombol submit sudah ditekan
    $nama = $_GET['nama']; // Variabel untuk mengambil nilai dari input nama
    $nim = $_GET['nim'];   // Variabel untuk mengambil nilai dari input nim

    echo "<h3>INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS</h3>";
    echo "Nama: **$nama**<br/>";
    echo "NIM: **$nim**";
}
?>

</body>
</html>
