<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
	}

	table, th, td {
		border: 1px solid black;
		font-size: 11pt;
		text-align: center;
	}
</style>
<center>
	<h3>Data Pasien RS.CINTA IBU</h3>
</center>
<table>
	<thead>
		<tr>
			<th width="1%">No</th>
			<th width="15%">ID PASIEN</th>
			<th width="15%">NAMA PASIEN</th>
			<th>JENIS KELAMIN</th>		
			<th>ALAMAT</th>		
			<th>NO TELP</th>														
		</tr>
	</thead>
	<tbody>
		<?php
		include '../koneksi.php';
		$no = 1; 
		$data = mysqli_query($koneksi,"select * from pasien");		
		while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['pasien_id_pasien'] ?></td>
				<td><?php echo $d['pasien_nama'] ?></td>
				<td><?php echo $d['pasien_jk'] ?></td>			
				<td><?php echo $d['pasien_alamat'] ?></td>			
				<td><?php echo $d['pasien_telp'] ?></td>																	
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>