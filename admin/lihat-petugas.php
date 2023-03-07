<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset ="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width,initial-scale =1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author"content ="">
    <title>admin</title>
    <!--Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/
    css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel ="stylesheet">
    <!--Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css"rel="stylesheet">
    <Custom styles for this page-->
      <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel ="stylesheet">
</head>
<body id ="page-top">
   
<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body" style="font-size: 14px">

            <a href="admin.php?url=tambah-petugas" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
                </a><br><br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                        <th>ID Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telp</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                   
                  </tfoot>
                  <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "select * from petugas";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data=mysqli_fetch_array($query)){ ?>
                    <tr>
                       <td><?php echo $no++; ?></td>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp_petugas']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td>
                        <!--ini tombol-->
                        <a href="admin.php?url=edit-petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-primary btn-circle">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="delete-petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
                            <i class="fa fa-trash"></i>
                        </a>

                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
</div>