<?php 

include '../koneksi.php';
$id = $_POST['id'];
$id_pel = $_POST['id_pel'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

mysqli_query($koneksi,"update pasien set pasien_id_pasien='$id_pel', pasien_nama='$nama', pasien_jk='$jk', pasien_alamat='$alamat', pasien_telp='$hp' where pasien_id='$id'");	
header("location:pasien.php");