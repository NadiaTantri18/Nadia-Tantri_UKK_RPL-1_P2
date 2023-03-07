<div class="card shadow">
	<div class="card-header">
		<a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-5">
				<i class="fa fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>
		</div>
		<div class="card-header">
			Edit Data Pengaduan
		<div class="card-body">
            <?php
            require 'koneksi.php';
            $sql=mysqli_query($koneksi,"select * from pengaduan where id_pengaduan='$_GET[id]' ");
            if ($data=mysqli_fetch_array($sql))
            {

            ?>
			<form method="post" action="update-pengaduan.php" enctype="multipart/form-data">
			<input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">

				<div class="form-group">
					<label style="font-size: 14px;">Tanggal Pengaduan</label>
					<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">NIK</label>
					<input type="text" name="nik" class="form-control" readonly value="<?php echo $_SESSION['nik']; ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Isi Laporan</label>
					<textarea name="isi_laporan" class="form-control" required><?= $data['isi_laporan']?></textarea>
				</div>
				
				<div class="form-group">
					<label style="font-size: 14px;">Foto</label>
					<input type="file" required class="form-control" required name="foto" accept=".jpg, .jpeg, .png, .gif">
					<font color="red" size="3">* tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
				</div>
				<div class="form-group col-sm-6">
					<input type="submit"value="Edit Data" class="btn btn-success">
					<input type="reset" value="Kosongkan" class="btn btn-warning"> 
				</div>
				
			</form>
            <?php } ?>
		</div>
	</div>