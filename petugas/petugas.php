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
						<h4 class="panel-title">Data Petugas</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped table-datatable">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th width="15%">NAMA</th>
									<th>JENIS KELAMIN</th>		
									<th>ALAMAT</th>		
									<th>NO TELP</th>		
									<th>EMAIL</th>		
									<th>USERNAME</th>											
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from petugas");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['nama_petugas'] ?></td>
									<td><?php echo $d['jenis_kelamin_petugas'] ?></td>			
									<td><?php echo $d['alamat'] ?></td>			
									<td><?php echo $d['no_telp'] ?></td>			
									<td><?php echo $d['email'] ?></td>			
									<td><?php echo $d['username_petugas'] ?></td>												
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
			
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>