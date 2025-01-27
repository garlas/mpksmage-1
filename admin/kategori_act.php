<?php
include '../koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];

// Cek jika data tidak kosong
if (!empty($nama)) {
    // Menggunakan prepared statement untuk menghindari SQL Injection
    $query = "INSERT INTO kategori (kategori) VALUES (?)";
    
    // Siapkan statement
    $stmt = mysqli_prepare($koneksi, $query);
    
    // Bind parameter
    mysqli_stmt_bind_param($stmt, "s", $nama); // "s" artinya string
    
    // Eksekusi query
    if (mysqli_stmt_execute($stmt)) {
        // Jika berhasil, redirect ke halaman kategori
        header("Location: kategori.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
    
    // Tutup prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Jika input kosong
    echo "Nama kategori tidak boleh kosong!";
}
?>
