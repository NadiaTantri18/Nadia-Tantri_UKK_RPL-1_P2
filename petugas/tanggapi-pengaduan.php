<?php 
$id = $_GET['id'];
if (empty($id)) {
	header("Location: verifikasi-pengaduan.php");
}

include '../koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
 ?>
<div class="card shadow">
	<div class="card-header">
		<a href="?url=verifikasi-pengaduan" class="btn btn-secondary btn-icon-split">
			<span class="icon text-white-5">
				<i class="fas fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>
		</div>
		<div class="card-body">
			Detail Pengaduan
			<form method="post" action="simpan-tanggapi.php" enctype="multipart/form-data">
				<div class="form-group">
					<label style="font-size: 14px;">ID Pengaduan</label>
					<input type="text" name="id_pengaduan" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Tanggal Pengaduan</label>
					<input type="text" name="tgl_tanggapan" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Tulis Tanggapan</label>
					<textarea name="tanggapan" class="form-control" required ></textarea>
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">ID Petugas</label>
					<input type="text" name="id_petugas" class="form-control" 
					value="<?php echo $_SESSION['id_petugas'] ?>" readonly>
				</div>
				<input type="submit" class="btn btn-primary" name="form-control" value="Tanggapi">
				</form>
		</div>
	</div>