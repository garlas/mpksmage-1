<?php 

include '../koneksi.php';
$id = $_POST['id'];
$pass = md5($_POST['pass']);


mysqli_query($koneksi,"update petugas set password_petugas='$pass' where id_petugas='$id'");
header("location:index.php");