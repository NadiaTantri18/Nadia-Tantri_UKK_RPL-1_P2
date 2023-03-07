<?php 

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

            case 'lihat-pengaduan';
            include 'lihat-pengaduan.php';
            break;

            case 'detail-pengaduan';
            include 'detail-pengaduan.php';
            break;

            case 'lihat-tanggapan';
        	include 'lihat-tanggapan.php';
            break;
            case 'edit-pengaduan';
            include 'edit-pengaduan.php';
            break;
        default:
          echo "Halaman Tidak Ditemukan";
            break;
    }
}else{
    echo "<center>Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, <br>Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.</center><br><br>";
   

}