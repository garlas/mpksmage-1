<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Edit Data Pasien</h4>
						<div class="heading-elements">
							<a href="pasien.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from pasien where pasien_id='$id'");
							while($d = mysqli_fetch_array($data)){
							?>
							<form action="pasien_update.php" method="post">
								<table class="table">
									<tr>
										<th width="30%">ID PASIEN</th>										
										<td>
											<input class="form-control" type="text" name="id_pel" value="<?php echo $d['pasien_id_pasien'] ?>">
											<input class="form-control" type="hidden" name="id" value="<?php echo $d['pasien_id'] ?>">
										</td>
									</tr>
									<tr>
										<th>NAMA</th>										
										<td><input class="form-control" type="text" name="nama" value="<?php echo $d['pasien_nama'] ?>"></td>
									</tr>																	
									<tr>
										<th>JENIS KELAMIN</th>
										<td>
											<select name="jk" class="form-control">
												<option <?php if($d['pasien_jk'] == "Laki-laki"){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
												<option <?php if($d['pasien_jk'] == "Perempuan"){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
											</select>
										</td>
									</tr>	
									<tr>
										<th>ALAMAT</th>
										<td><input class="form-control" type="text" name="alamat" value="<?php echo $d['pasien_alamat'] ?>"></td>
									</tr>	
									<tr>
										<th>NO TELP</th>
										<td><input class="form-control" type="text" name="hp" value="<?php echo $d['pasien_telp'] ?>"></td>
									</tr>										
									<tr>
										<th></th>
										<td><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
									</tr>		
								</table>
							</form>
							<?php } ?>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		

		<div class="footer text-muted">
			<!-- &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a> -->
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>