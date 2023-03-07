<?php 

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'verifikasi-pengaduan';
        include 'verifikasi-pengaduan.php';
        break;

        case 'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;

        case 'tanggapan-pengaduan';
        include 'tanggapan-pengaduan.php';
        break;

        case 'lihat-petugas';
        include 'lihat-petugas.php';
        break;

        case 'tambah-petugas';
        include 'tambah-petugas.php';
        break;

        case 'edit-petugas':
        include 'edit-petugas.php';
        break;

        case 'preview-petugas':
        include 'preview-petugas.php';
        break;

        case 'lihat-masyarakat':
        include 'lihat-masyarakat.php';
        break;
        
        case 'preview-masyarakat':
        include 'preview-masyarakat.php';
        break;

        case 'lihat-laporan':
        include 'lihat-laporan.php';
        break;

        case 'preview-laporan':
        include 'preview-laporan.php';
        break;

        case 'lihat-tanggapan':
        include 'lihat-tanggapan.php';
        break;

        case 'preview-tanggapan':
        include 'preview-tanggapan.php';
        break;


        case 'lihat-tanggapan1':
        include 'lihat-tanggapan1.php';
        break;

      

        case 'cetak-print':
        include 'cetak-print.php';
        break;


        case 'cetak-print1':
        include 'cetak-print1.php';
        break;

      






    }
}else{

    echo"<br><center>Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat <br> Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.</center>";
   
    require '../koneksi.php';
    $sql=mysqli_query($koneksi, "select * from pengaduan where status='belum diproses'");
    $cek=mysqli_num_rows($sql)
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

             <?php          
          $sql=mysqli_query($koneksi, "select * from masyarakat");
        $cek=mysqli_num_rows($sql)
         ?>
         

    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Jumlah Masyarakat : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $cek; ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-4x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

         <?php 
                          

          $sql=mysqli_query($koneksi, "select * from petugas");
    $cek=mysqli_num_rows($sql)
        ?>
         

    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-info-800-text-uppercase mb-2">Admin Dan Petugas : </div>
                <div class="h5 mb-0 font-weight-bold text-info-800"> <?php echo $cek; ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-4x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>


         <?php  } ?>