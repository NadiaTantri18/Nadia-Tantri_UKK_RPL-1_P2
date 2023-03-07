<?php
require '../koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];


$sql=mysqli_query($koneksi,"insert into masyarakat(nik,nama,username,password,telp) values('$nik','$nama','$user','$pass','$telp')");

if ($sql)
{
?>   
<script type="text/javascript">
    alert ('Data Berhasil Disimpan');
    window.location='admin.php?url=lihat-masyarakat';
</script>
<?php
}
?>