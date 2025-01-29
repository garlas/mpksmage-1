<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id_aspirasi = $_POST['id_aspirasi'];  // ID Aspirasi yang di-generate
    $id_siswa = $_POST['id_siswa'];        // ID Siswa
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);  // Isi Aspirasi
    $waktu_aspirasi = date('Y-m-d H:i:s');
    $status_aspirasi = 0; // Status 0 berarti belum diproses

    // Masukkan data aspirasi ke dalam database
    $query = "INSERT INTO aspirasi (id_aspirasi, id_siswa, isi_aspirasi, waktu_aspirasi, status_aspirasi) 
              VALUES ('$id_aspirasi', '$id_siswa', '$isi', '$waktu_aspirasi', '$status_aspirasi')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect dengan ID Aspirasi untuk ditampilkan
        header("Location: pengaduan.php?pesan=sukses&id_aspirasi=" . $id_aspirasi);
        exit();
    } else {
        // Redirect dengan pesan error
        header("Location: pengaduan.php?pesan=error_insert");
        exit();
    }
}
?>
