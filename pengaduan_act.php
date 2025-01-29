<?php
include "koneksi.php";

$id_aspirasi = mysqli_real_escape_string($koneksi, $_POST['id_aspirasi']);
$id_siswa = mysqli_real_escape_string($koneksi, $_POST['id_siswa']);
$isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
$waktu_aspirasi = date("Y-m-d");

// Simpan ke database
$query = "INSERT INTO aspirasi (id_aspirasi, id_siswa, isi_aspirasi, waktu_aspirasi, status_aspirasi) 
          VALUES ('$id_aspirasi', '$id_siswa', '$isi', '$waktu_aspirasi', 0)";

if(mysqli_query($koneksi, $query)){
    header("Location: layanan_aspirasi.php?pesan=sukses&id_aspirasi=$id_aspirasi");
} else {
    header("Location: layanan_aspirasi.php?pesan=error_insert");
}

?>
