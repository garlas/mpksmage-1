<?php 
include 'koneksi.php';
$data = $_POST['data'];

if($data!=""){	
	$cek = mysqli_query($koneksi,"select * from pasien where pasien_id_pasien='$data'");
	if(mysqli_num_rows($cek) > 0){

		while($d = mysqli_fetch_array($cek)){
			?>

			<table class="table table-bordered">
				<tr>
					<th width="30%">Nama Pasien</th>
					<th width="1px">:</th>
					<td><?php echo $d['pasien_nama'] ?></td>
				</tr>
				<tr>
					<th width="30%">Jenis Kelamin</th>
					<th width="1px">:</th>
					<td><?php echo $d['pasien_jk'] ?></td>
				</tr>
				<tr>
					<th width="30%">Alamat</th>
					<th width="1px">:</th>
					<td><?php echo $d['pasien_alamat'] ?></td>
				</tr>
				<tr>
					<th width="30%">HP</th>
					<th width="1px">:</th>
					<td><?php echo $d['pasien_telp'] ?></td>
				</tr>
			</table>

			<?php
		}
	}else{
		echo "0";
	}
}

?>