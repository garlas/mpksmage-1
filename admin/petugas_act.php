<?php
include '../koneksi.php'; // Pastikan file koneksi ada dan terhubung

// Mengambil data dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']); // Password di-hash menggunakan MD5

// Query untuk menambahkan data ke tabel petugas
$query = "INSERT INTO petugas (id_petugas, nama_petugas, jenis_kelamin_petugas, alamat, no_telp, email, username_petugas, password_petugas) 
          VALUES (NULL, '$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$email', '$username', '$password')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, redirect ke halaman petugas.php
    header("Location: petugas.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
