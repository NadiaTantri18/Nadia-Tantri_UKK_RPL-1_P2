<div class="card shadow">
	<div class="card-header">
		<a href="?url=lihat-petugas" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-5">
				<i class="fa fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>
		</div>
		<div class="card-header">
			Edit Data Petugas
		<div class="card-body">
            <?php
            require '../koneksi.php';
            $sql=mysqli_query($koneksi,"select * from petugas where id_petugas='$_GET[id]' ");
            if ($data=mysqli_fetch_array($sql))
            {

            ?>
            <form method="post" action="update-petugas.php" enctype="multipart/form-data">
		<div class="form-group">
					<label style="font-size: 14px;">ID Petugas</label>
					<input type="text" name="id_petugas" class="form-control"  value="<?php echo $data['id_petugas']; ?>" class="form-control"
                    readonly>
				</div>
                <div class="form-group">
					<label style="font-size: 14px;">Nama Petugas</label>
					<input type="text" name="nama_petugas" class="form-control"  value="<?php echo $data['nama_petugas']; ?>" class="
                    form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Username</label>
					<input type="text" name="username" class="form-control"  value="<?php echo $data['username']; ?>" class="
                    form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Password</label>
					<input type="text" name="password" class="form-control"  value="<?php echo $data['password']; ?>" class="
                    form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Telp</label>
					<input type="text" name="telp_petugas" class="form-control"  value="<?php echo $data['telp_petugas']; ?>" class="
                    form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Level</label>
					<select class="form-control" name="level">
					
						<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>
					</select>
				</div>
				
				<div class="form-group col-sm-6">
					<input type="submit"value="Edit Data" class="btn btn-success">
					<input type="reset" value="Kosongkan" class="btn btn-warning"> 
				</div>
				
			</form>
            <?php } ?>
		</div>
	</div>