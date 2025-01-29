<?php
include '../koneksi.php';

// Mengecek apakah data telah dikirim
if (isset($_POST['id']) && isset($_POST['isi_aspirasi']) && isset($_POST['status'])) {
    // Mengambil data dari form
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);  // Sanitasi input ID
    $isi_aspirasi = mysqli_real_escape_string($koneksi, $_POST['isi_aspirasi']);  // Sanitasi input isi aspirasi
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);  // Sanitasi input statu

    // Query untuk memperbarui data aspirasi
    $update = mysqli_query($koneksi, "UPDATE aspirasi SET isi_aspirasi = '$isi_aspirasi', status_aspirasi = '$status' WHERE aspirasi_id = '$id'");

    // Mengecek apakah pembaruan berhasil
    if ($update) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='aspirasi.php';</script>";
    } else {
        echo "<script>alert('Data gagal diperbarui!'); window.location.href='aspirasi.php';</script>";
    }
} else {
    echo "<script>alert('Data tidak lengkap!'); window.location.href='aspirasi.php';</script>";
}
?>
