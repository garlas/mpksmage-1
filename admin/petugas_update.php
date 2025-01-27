<?php
include '../koneksi.php'; // Pastikan koneksi database sudah disertakan

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query update
if (empty($password)) {
    // Jika password kosong, jangan diupdate
    $query = "UPDATE petugas SET 
                nama_petugas='$nama', 
                jenis_kelamin_petugas='$jk', 
                alamat='$alamat', 
                no_telp='$hp', 
                email='$email', 
                username_petugas='$username' 
              WHERE id_petugas='$id'";
} else {
    // Jika password diisi, update juga password menggunakan md5
    $password_hashed = md5($password);
    $query = "UPDATE petugas SET 
                nama_petugas='$nama', 
                jenis_kelamin_petugas='$jk', 
                alamat='$alamat', 
                no_telp='$hp', 
                email='$email', 
                username_petugas='$username', 
                password_petugas='$password_hashed' 
              WHERE id_petugas='$id'";
}

if (mysqli_query($koneksi, $query)) {
    header("Location: petugas.php?status=success");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
