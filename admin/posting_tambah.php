<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Tulis Artikel Baru</h4>
						<div class="heading-elements">
							<a href="posting.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="posting_act.php" method="post" enctype="multipart/form-data">
								<table class="table">
									<tr>
										<th width="20%">Judul</th>
										<td><input class="form-control" type="text" name="judul" required="required"></td>
									</tr>
									<tr>
										<th>Kategori</th>
										<td>
											<select class="form-control" name="kategori" required="required">
												<option value="">- Pilih -</option>
												<?php
												$data = mysqli_query($koneksi,"select * from kategori");		
												while($d=mysqli_fetch_array($data)){
													?>
													<option value="<?php echo $d['kategori_id']; ?>"><?php echo $d['kategori'] ?></option>
													<?php
												}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<th>Konten</th>
										<td><textarea style="min-height: 180px;resize: none" class="ckeditor" id="ckeditor" name="konten" required="required"></textarea></td>
									</tr>	
									<tr>
										<th>Gambar Sampul<br/><small>Yang tersimpan hanya file gambar yang berekstensi .jpg atau .png</small></th>
										<td><input type="file" name="sampul" required="required"></td>
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