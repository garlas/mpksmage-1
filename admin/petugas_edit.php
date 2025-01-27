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
                        <h4 class="panel-title">Edit Data Petugas</h4>
                        <div class="heading-elements">
                            <a href="petugas.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <form action="petugas_update.php" method="post">
                                <?php
                                // Pastikan Anda sudah menyambungkan ke database
                                include 'koneksi.php';

                                // Ambil ID petugas dari URL
                                $id = $_GET['id'];
                                $data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id'");        
                                while($d = mysqli_fetch_array($data)) {
                                ?>
                                <table class="table">                                    
                                    <tr>
                                        <th width="30%">NAMA</th>                                        
                                        <td>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $d['id_petugas']; ?>">
                                            <input class="form-control" type="text" name="nama" value="<?php echo $d['nama_petugas']; ?>" required>
                                        </td>
                                    </tr>                                                                    
                                    <tr>
                                        <th>JENIS KELAMIN</th>
                                        <td>
                                            <select name="jk" class="form-control" required>
                                                <option <?php if($d['jenis_kelamin_petugas'] == "Laki-laki"){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
                                                <option <?php if($d['jenis_kelamin_petugas'] == "Perempuan"){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th>ALAMAT</th>
                                        <td><input class="form-control" type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
                                    </tr>    
                                    <tr>
                                        <th>NO TELP</th>
                                        <td><input class="form-control" type="text" name="hp" value="<?php echo $d['no_telp']; ?>" required></td>
                                    </tr>    
                                    <tr>
                                        <th>EMAIL</th>
                                        <td><input class="form-control" type="email" name="email" value="<?php echo $d['email']; ?>" required></td>
                                    </tr>    
                                    <tr>
                                        <th>USERNAME</th>
                                        <td><input class="form-control" type="text" name="username" value="<?php echo $d['username_petugas']; ?>" required></td>
                                    </tr>                                    
                                    <tr>
                                        <th>PASSWORD</th>
                                        <td>
                                            <input class="form-control" type="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                                            <small>Kosongkan jika tidak ingin mengubah password</small>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th></th>
                                        <td><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
                                    </tr>        
                                </table>
                                <?php } ?>
                            </form>
                        </div>                    
                    </div>                    
                </div>    
            </div>
        </div>        
        <div class="footer text-muted"></div>
    </div>
</div>
<?php include 'footer.php'; ?>
