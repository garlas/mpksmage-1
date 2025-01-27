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
						<h4 class="panel-title">Data Artikel</h4>
						<div class="heading-elements">
							<a href="posting_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TULIS ARTIKEL BARU</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-datatable">						
								<tr>
									<th width="1%">No</th>
									<th width="5%">Tanggal</th>
									<th width="30%">Judul</th>		
									<th width="10%">Kategori Artikel</th>										
									<th width="5%">OPSI</th>
								</tr>
								<?php
								$no = 1; 
								$data = mysqli_query($koneksi,"select * from posting,kategori where kategori_id=posting_kategori order by posting_id desc");		
								while($d=mysqli_fetch_array($data)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo date('d-m-Y',strtotime($d['posting_tanggal'] )); ?></td>
										<td><?php echo $d['posting_judul'] ?></td>			
										<td><?php echo $d['kategori'] ?></td>											
										<td>
											<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="posting_edit.php?id=<?php echo $d['posting_id'];?>"><i class="icon-wrench3"></i></a>
											<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="posting_hapus.php?id=<?php echo $d['posting_id'];?>"><i class="icon-trash-alt"></i></a>
										</td>
									</tr>
									<?php
								}
								?>
							</table>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		
	

	</div>
</div>

<?php include 'footer.php'; ?>