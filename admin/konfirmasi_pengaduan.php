<?php
include '../koneksi.php';

// Pastikan ada parameter ID dan status yang diterima
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id_pengaduan = mysqli_real_escape_string($koneksi, $_GET['id']); // Sanitasi ID
    $status = (int) $_GET['status']; // Mengkonversi status menjadi integer

    // Debugging: Tampilkan nilai status yang diterima
    echo "Status yang diterima: " . $status;

    // Periksa jika status valid
    if ($status == 1) {
        $status_pengaduan = 1; // Diterima
    } elseif ($status == 2) {
        $status_pengaduan = 2; // Ditolak
    } else {
        die("Status tidak valid.");
    }

    // Pastikan koneksi berhasil
    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    // Update status pengaduan
    $update = mysqli_query($koneksi, "UPDATE aspirasi SET status_aspirasi='$status_pengaduan' WHERE id_aspirasi='$id_pengaduan'");

    if ($update) {
        // Redirect ke halaman sebelumnya setelah berhasil update
        header("Location: pengaduan.php?alert=berhasil");
        exit();
    } else {
        // Tampilkan pesan error lebih rinci jika gagal
        echo "Terjadi kesalahan saat memperbarui data: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter tidak lengkap.";
}
?>
