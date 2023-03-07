<?php 
require '../koneksi.php';

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        
            case 'verifikasi-pengaduan';
            include 'verifikasi-pengaduan.php';
            break;

             case 'detail-pengaduan';
            include 'detail-pengaduan.php';
            break;

           

            case 'tanggapi-pengaduan';
            include 'tanggapi-pengaduan.php';
            break;

             case 'view-pengaduan';
            include 'view-pengaduan.php';
            break;

             case 'lihat-tanggapan';
            include 'lihat-tanggapan.php';
            break;

        default:
          echo "Halaman Tidak Ditemukan";
            break;
    }
}   else{
    
    echo "<br><center>Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, <br>Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.</center>";
    



    $sql=mysqli_query($koneksi, "select * from pengaduan where status='belum diproses'");
    if($cek=mysqli_num_rows($sql)){
?>
<br>
<br>
 <!-- Content Row -->
          <div class="row">
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Laporan Masuk : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $cek; ?> 
            </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comment fa-4x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php
                        
          $sql=mysqli_query($koneksi, "select * from pengaduan where status='selesai'");
          $cek=mysqli_num_rows($sql)
         ?>
         
 
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Laporan Selesai : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $cek; ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-check fa-4x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

   <?php  } } ?>
