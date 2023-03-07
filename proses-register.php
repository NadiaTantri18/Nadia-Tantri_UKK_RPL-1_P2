<?php

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$confirmPassword   = $_POST['confirmPassword'];
$telp       = $_POST['telp'];

include 'koneksi.php';

if ($password == $confirmPassword) {
    $sql    = "INSERT INTO masyarakat(nik, nama, username, password, telp) VALUES('$nik', '$nama', '$username'
       ,'$password','$telp')";

    $query  = mysqli_query($koneksi, $sql);

    if($query){
        echo"<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index1.php');</script>";
    }else{
        echo"<script>alert('Anda Gagal Mendaftar.'); window.location.assign('register.php');</script>";
    }    
} else {
        echo"<script>alert('Konfirmasi Password Gagal.'); window.location.assign('register.php');</script>";
}

