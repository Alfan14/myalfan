<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>

<h3>Masukkan Nama, Email dan Password</h3>
<p>
    Default Nama = **belajar**, Email = **test@gmail.com** dan Password = **madiun**
</p>

<form method="post">
    Nama: <input type="text" name="nama" /><br/>
    Email: <input type="text" name="email" /><br/>
    Password: <input type="password" name="password" /><br/>
    <input type="submit" value="Cek" name="submit" />
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Validasi Input Kosong
    if (empty($email)) {
        print("Harap mengisi email <br>\n");
    } else {
        // 2. Validasi Format Email
        // Menggunakan fungsi preg_match() dengan Regular Expression untuk memeriksa format email
        // /ereg() sudah deprecated di PHP versi baru, di sini menggunakan fungsi preg_match()/
        if (!preg_match("/^.+@.+\..+$/", $email)) {
            print("Alamat email $email tidak valid<br>\n");
        } else {
            // 3. Proses Enkripsi dan Validasi Password
            if (isset($password)) {
                
                $pass_valid = crypt("madiun", "belajar"); // Enkripsi password default ("madiun")
                                                          // menggunakan salt/key "belajar"

                $enkripsi = crypt($password, $nama);      // Enkripsi password yang diinput user 
                                                          // menggunakan salt/key dari input nama user

                // Perbandingan hasil enkripsi
                if ($pass_valid == $enkripsi) {
                    print("Password valid");
                } else {
                    print("Password salah");
                }
            }
        }
    }
}
?>

</body>
</html>
