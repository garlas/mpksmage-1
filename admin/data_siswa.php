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
						<h4 class="panel-title">Data Layanan</h4>
						<div class="heading-elements">
							<!-- Optional Heading Elements -->
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th width="15%">ID Layanan</th>
										<th width="15%">Nama Layanan</th>																				
									</tr>
								</thead>
								<tbody>
								<?php
								$no = 1; 
								$data = mysqli_query($koneksi,"SELECT * FROM siswa");		
								while($d = mysqli_fetch_array($data)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $d['siswa_id']; ?></td>
										<td><?php echo $d['nama_siswa']; ?></td>																					
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		
	
		<div class="footer text-muted">
			<!-- Optional Footer Content -->
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>
