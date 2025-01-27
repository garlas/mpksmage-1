<?php
// Menghubungkan ke database
include '../koneksi.php';

// Memastikan parameter ID siswa dikirimkan
if (!isset($_GET['id'])) {
    echo "ID siswa tidak ditemukan.";
    exit;
}

$id = $_GET['id']; // Mengambil ID siswa dari parameter URL

// Mengecek koneksi ke database
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menampilkan ID yang akan dihapus untuk pengecekan
echo "ID siswa yang akan dihapus: " . $id . "<br>";

// Eksekusi query untuk menghapus data siswa berdasarkan siswa_id
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswa_id='$id'");

// Mengecek apakah query berhasil dijalankan
if ($query) {
    // Jika berhasil, redirect ke halaman data siswa
    header("location:data_siswa.php");
    exit; // Pastikan script berhenti setelah redirect
} else {
    // Jika gagal, tampilkan pesan error
    echo "Gagal menghapus data siswa: " . mysqli_error($koneksi);
}
?>
