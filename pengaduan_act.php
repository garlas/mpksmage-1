<?php 

include 'koneksi.php';

// Menangkap data dari form
$id_siswa = $_POST['id_siswa']; // Pilihan ID Siswa (Aspirasi atau Saran/Kritik)
$isi = $_POST['isi'];

// Mengambil waktu saat ini
date_default_timezone_set("Asia/Bangkok");
$waktu = date('Y-m-d H:i:s');

// Menyimpan data aspirasi atau saran/ kritik ke database
$query = "INSERT INTO aspirasi (id_siswa, isi_aspirasi, waktu_aspirasi, status_aspirasi) 
          VALUES ('$id_siswa', '$isi', '$waktu', 0)";  // status_aspirasi 0 berarti menunggu konfirmasi

if(mysqli_query($koneksi, $query)){
    header("location:pengaduan.php?pesan=sukses");
} else {
    header("location:pengaduan.php?pesan=error_insert");
}

?>
