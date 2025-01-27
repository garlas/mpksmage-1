<?php
include '../koneksi.php';

// Mengambil data dari form
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

// Cek apakah siswa sudah ada di database berdasarkan nama dan kelas
$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama_siswa = '$nama_siswa' AND kelas = '$kelas'");

if (mysqli_num_rows($cek) > 0) {
    // Jika siswa sudah ada, arahkan ke halaman tambah siswa dengan alert
    header("location:siswa_tambah.php?alert=ada");
} else {
    // Jika siswa belum ada, masukkan data baru ke tabel siswa
    $query = "INSERT INTO siswa (nama_siswa, kelas, jenis_kelamin, alamat, telepon) 
              VALUES ('$nama_siswa', '$kelas', '$jenis_kelamin', '$alamat', '$telepon')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil ditambahkan, arahkan ke halaman data siswa
        header("location:data_siswa.php");
    } else {
        // Jika ada kesalahan dalam query, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
