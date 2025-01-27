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
						<h4 class="panel-title">Edit Artikel</h4>
						<div class="heading-elements">
							<a href="posting.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from posting where posting_id='$id'");
							while($d = mysqli_fetch_array($data)){
								?>
								<form action="posting_update.php" method="post" enctype="multipart/form-data">
									<table class="table">
										<tr>
											<th width="20%">Judul</th>
											<td>
												<input class="form-control" type="hidden" name="id" required="required" value="<?php echo $d['posting_id']; ?>">
												<input class="form-control" type="text" name="judul" required="required" value="<?php echo $d['posting_judul']; ?>">
											</td>
										</tr>
										<tr>
											<th>Kategori</th>
											<td>
												<select class="form-control" name="kategori" required="required">
													<option value="">- Pilih -</option>
													<?php
													$kategori = mysqli_query($koneksi,"select * from kategori");		
													while($k=mysqli_fetch_array($kategori)){
														?>
														<option <?php if($d['posting_kategori']==$k['kategori_id']){echo "selected='selected'";} ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori'] ?></option>
														<?php
													}
													?>
												</select>
											</td>
										</tr>
										<tr>
											<th>Konten</th>
											<td><textarea style="min-height: 180px" class="ckeditor" id="ckeditor" name="konten" required="required"><?php echo $d['posting_konten']; ?></textarea></td>
										</tr>	
										<tr>
											<th>Gambar Sampul<br/><small>Yang tersimpan hanya file gambar yang berekstensi .jpg atau .png</small></th>
											<td><input type="file" name="sampul"><br/><small class="text-danger">Kosongkan jika tidak ingin mengubah gambar</small></td>
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


	</div>
</div>

<?php include 'footer.php'; ?>