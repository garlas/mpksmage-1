<?php include "header.php"; ?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Artikel</h2>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="container content">		
		<!-- Service Blcoks -->

		<div class="row"> 
			<div class="col-md-8">
				
				<?php 
				$id = $_GET['id'];
				$artikel = mysqli_query($koneksi,"select * from posting,kategori where kategori_id=posting_kategori and posting_id='$id'");
				while($a = mysqli_fetch_array($artikel)){
					?>
					<div class="col-md-12 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="images/posting/<?php echo $a['posting_sampul']; ?>" alt="">  
								<span class="card-title"><?php echo $a['posting_judul']; ?></span>
							</div>
							<div class="card-content">
								<h5>Kategori : <?php echo $a['kategori']; ?> <br/><br/> Tanggal : <?php echo date('d-m-Y',strtotime($a['posting_tanggal'])); ?></h5>
								<p style="font-size: 12pt;line-height: 27px">
									<?php echo $a['posting_konten']; ?>	
								</p>
							</div>
						</div>        
					</div>
					<?php 
				}
				?>

			</div>
			<div class="col-md-4">
				<div class="about-log">
					<h3><span class="color">ARTIKEL</span> Lainnya</h3>
					<ul>
						<?php 
						$x = mysqli_query($koneksi,"select * from posting");
						while($xx = mysqli_fetch_array($x)){
							?>
							<li style="margin-bottom: 10px">- <a href="single.php?id=<?php echo $xx['posting_id']; ?>" style="font-size: 12pt;font-weight: 600;"><?php echo $xx['posting_judul']; ?></a></li>
							<?php 
						}
						?>
					</ul>
				</div>  
			</div>
		</div>


	</div>
</section>
<?php include "footer.php"; ?>

