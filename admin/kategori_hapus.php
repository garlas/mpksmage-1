<?php 

include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from kategori where kategori_id='$id'");
header("location:kategori.php");

