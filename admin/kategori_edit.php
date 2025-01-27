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
						<h4 class="panel-title">Edit Kategori Artikel</h4>
						<div class="heading-elements">
							<a href="kategori.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
							$id = $_GET['id'];
							include '../koneksi.php';
							$data = mysqli_query($koneksi,"select * from kategori where kategori_id='$id'");
							while($d = mysqli_fetch_array($data)){
								?>
								<form action="kategori_update.php" method="post">
									<table class="table">
										<tr>
											<th width="30%">NAMA KATEGORI</th>										
											<td>
												<input class="form-control" type="hidden" name="id" value="<?php echo $d['kategori_id']; ?>">
												<input class="form-control" type="text" name="nama" value="<?php echo $d['kategori']; ?>">
											</td>
										</tr>																	
										<tr>
											<th></th>
											<td><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
										</tr>		
									</table>
								</form>
								<?php 
							}
							?>
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