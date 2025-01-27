<?php 

include '../koneksi.php';
$id = $_POST['id'];

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$konten = $_POST['konten'];


$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$sampul = $_FILES['sampul']['name'];

if($sampul!=""){
	$x = explode('.', $sampul);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['sampul']['size'];
	$file_tmp = $_FILES['sampul']['tmp_name'];	
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, '../images/posting/'.$sampul);
			mysqli_query($koneksi,"update posting set posting_sampul='$sampul' where posting_id='$id'");
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}

mysqli_query($koneksi,"update posting set posting_judul='$judul', posting_kategori='$kategori', posting_konten='$konten' where posting_id='$id'");
header("location:posting.php");