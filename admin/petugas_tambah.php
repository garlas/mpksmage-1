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
						<h4 class="panel-title">Tambah Petugas Baru</h4>
						<div class="heading-elements">
							<a href="petugas.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="petugas_act.php" method="post">
								<table class="table">
									<tr>
										<th width="30%">NAMA</th>										
										<td><input class="form-control" type="text" name="nama" required="required"></td>
									</tr>																	
									<tr>
										<th>JENIS KELAMIN</th>
										<td>
											<select name="jk" class="form-control" required="required">
												<option value="Laki-laki">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</td>
									</tr>	
									<tr>
										<th>ALAMAT</th>
										<td><input class="form-control" type="text" name="alamat" required="required"></td>
									</tr>	
									<tr>
										<th>NO TELP</th>
										<td><input class="form-control" type="text" name="hp" required="required"></td>
									</tr>	
									<tr>
										<th>EMAIL</th>
										<td><input class="form-control" type="text" name="email" required="required"></td>
									</tr>	
									<tr>
										<th>USERNAME</th>
										<td><input class="form-control" type="text" name="username" required="required"></td>
									</tr>									
									<tr>
										<th>PASSWORD</th>
										<td><input class="form-control" type="text" name="password" required="required"></td>
									</tr>	
									<tr>
										<th></th>
										<td><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
									</tr>		
								</table>
							</form>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		
	

	</div>
</div>

<?php include 'footer.php'; ?>