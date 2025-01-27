<?php
include '../koneksi.php';

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!isset($_GET['id'])) {
    die("ID siswa tidak ditemukan dalam parameter URL.");
}

$id = $_GET['id'];
echo "ID yang diterima: " . $id;

// Cek apakah data siswa ada
$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE siswa_id='$id'");
if (mysqli_num_rows($cek) == 0) {
    die("Data siswa dengan ID $id tidak ditemukan.");
}

// Hapus data siswa
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswa_id='$id'");
if (!$query) {
    die("Gagal menghapus data siswa: " . mysqli_error($koneksi));
} else {
    echo "Data siswa berhasil dihapus.";
    // Redirect jika berhasil
    header("location:data_siswa.php");
    exit;
}
?>
