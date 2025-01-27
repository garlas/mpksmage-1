<?php
$servername = "localhost";
$username = "ulmbiwfi_aspirasi_"; // Ganti sesuai username MySQL
$password = "WN_sqthZu2M3_g7";     // Ganti jika ada password
$dbname = "ulmbiwfi_aspirasi_db";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Koneksi berhasil
// echo "Koneksi berhasil!"; // Hapus ini jika ingin menghindari output yang tidak perlu
?>
