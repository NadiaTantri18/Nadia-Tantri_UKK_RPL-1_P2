<?php 
$id = &$_GET['id'];
if (empty($id)) {
	header("Location: masyarakat.php");
}

include 'koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
 ?>
<div class="card shadow">
	<div class="card-header">
		<a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-5">
				<i class="fa fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>
		</div>
		<div class="card-body">
        <?php
            if(mysqli_num_rows($query)==0){
				$query = mysqli_query($koneksi, "SELECT status FROM pengaduan WHERE id_pengaduan = $id");
				$status = mysqli_fetch_array($query);
				switch($status['status']){
					case 'Ditolak' :
						echo"<div class='alert alert-danger'>Maaf tanggapan anda telah ditolak.</div>";
						break;
					case 'proses' :
						echo"<div class='alert alert-danger'>Maaf tanggapan anda belum ditanggapi.</div>";
						break;
					case 'belum diproses' :
						echo"<div class='alert alert-danger'>Maaf tanggapan anda belum ditanggapi.</div>";
						break;
				}
            }else{
            $data = mysqli_fetch_array($query);?>

			<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
				<div class="form-group">
					<label style="font-size: 14px;">Tanggal Pengaduan</label>
					<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_tanggapan'] ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;"> Laporan</label>
					<textarea name="isi_laporan" class="form-control"  readonly required><?= $data['isi_laporan']?></textarea>
				</div>
                <div class="form-group">
					<label style="font-size: 14px;"> Tanggapan</label>
					<textarea name="isi_laporan" class="form-control"  readonly required><?= $data['tanggapan']?></textarea>
				</div>
				</form>
                <?php }