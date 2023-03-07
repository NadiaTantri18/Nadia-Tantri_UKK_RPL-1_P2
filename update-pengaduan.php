<?php 
session_start();
include 'koneksi.php';

$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik           = $_SESSION['nik'];
$isi_laporan   = $_POST ['isi_laporan'];
$lokasi_foto   = $_FILES['foto']['tmp_name'];
$nama_foto     = $_FILES['foto']['name'];
$status        = "belum diproses";
$id            = $_POST['id_pengaduan'];

$sql=mysqli_query($koneksi,"update pengaduan set tgl_pengaduan='$tgl_pengaduan', nik='$nik', isi_laporan='$isi_laporan', foto='$nama_foto' , status='$status' where id_pengaduan='$id' ");

if ($sql)
{
?>   
<script type="text/javascript">
    alert ('Data Berhasil Diubah');
    window.location='masyarakat.php?url=lihat-pengaduan';
</script>
<?php
}
?>s