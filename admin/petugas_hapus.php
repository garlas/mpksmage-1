<?php 

include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from petugas where id_petugas='$id'");
header("location:petugas.php");