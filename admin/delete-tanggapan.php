<?php
require '../koneksi.php';
$id=$_GET['id_tanggapan'];

$sql=mysqli_query($koneksi,"Delete from tanggapan where id_tanggapan='$id' ");

if($sql)    
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat-tanggapan';
        </script>
        <?php
}
?>