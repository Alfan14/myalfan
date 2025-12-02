<?php
// Masukkan file koneksi
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    // Ambil dan bersihkan data input
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $tgl_pinjam = mysqli_real_escape_string($koneksi, $_POST['tgl_pinjam']);

    // Query SQL untuk menyimpan data
    $sql = "INSERT INTO tabel_perpus (nama_peminjam, email, judul_buku, tgl_pinjam) 
            VALUES ('$nama', '$email', '$judul', '$tgl_pinjam')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data peminjaman buku berhasil disimpan! <br>";
        echo "<a href='Formulir_Perpuskotamadiun.html'>Kembali ke Formulir</a> | ";
        echo "<a href='tampil_perpus.php'>Lihat Data</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
