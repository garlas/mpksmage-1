<?php
include '../koneksi.php'; // Pastikan koneksi database sudah disertakan

// Cek apakah 'id_aspirasi' ada di URL
if (isset($_GET['id_aspirasi'])) {
    $id_aspirasi = $_GET['id_aspirasi'];

    // Query untuk menghapus aspirasi dengan ID yang diberikan
    $query = "DELETE FROM aspirasi WHERE aspirasi_id = '$aspirasi_id'";

    // Jalankan query
    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman daftar aspirasi setelah berhasil
        header('Location: aspirasi.php'); // Sesuaikan dengan halaman yang diinginkan
        exit();
    } else {
        // Menampilkan pesan error jika penghapusan gagal
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika 'id_aspirasi' tidak ditemukan di URL
    echo "ID aspirasi tidak ditemukan.";
}
?>
