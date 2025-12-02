<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 6 PEMROGRAMAN WEB</title>
</head>
<body>

<form method="post">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" /></td>
    </tr>
    <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td>
            <select name="mk">
                <option value="-----Pilih Mata Kuliah-----">-----Pilih Mata Kuliah-----</option>
                <option value="Pemrograman Terstruktur">Pemrograman Terstruktur</option>
                <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                <option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
            <input type="radio" name="jk" value="Laki-laki" />Laki-Laki<br/>
            <input type="radio" name="jk" value="Perempuan" />Perempuan
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" /></td>
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
if(isset($_POST['submit'])) { //Memeriksa apakah tombol submit sudah ditekan
    // Variabel untuk menampung data dari form
    $nama = $_POST['nama'];
    $mk = $_POST['mk'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];

    echo "<h3>INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS</h3>";
    echo "Nama: **$nama**<br/>";
    echo "MK: **$mk**<br/>";
    echo "Jenis Kelamin: **$jk**<br/>";
    echo "Email: **$email**";
}
?>

</body>
</html>
