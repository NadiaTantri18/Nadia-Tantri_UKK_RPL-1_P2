<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Petugas</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow mb-4">
            <div class="card-header py-3">
         
            </div>
            <div class="card-body" style="font-size: 14px">

              <h3 class="m-0 font-weight-bold text-dark" align="center">PEMERINTAH KABUPATEN KARAWANG</h3>
              <h4 class="m-0 font-weight-bold text-dark" align="center">DESA PASIR JENGKOL KEC. TANJUNG PURA</h4>
              <h6 class="m-0 font-weight-bold text-dark" align="center">Jalan Pangkal Perjuangan</h6>
                <br><br><hr>

                <h4 class="m-0 font-weight-bold text-dark" align="center">Laporan Petugas</h4>
                 <br><br>
              <div class="table-responsive">
                <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                        <th>ID Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telp</th>
                        <th>Level</th>
                       
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
                    <tr class="text-dark font-weight-bold">
                       <td><?php echo $no++; ?></td>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp_petugas']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

              </div>
              <br>
                <br>
                <h6 class="m-0 font-weight-bold text-dark" align="right">Pasir Jengkol, <?php echo date ('d m Y'); ?></h6>
                <h6 class="m-0 font-weight-bold text-dark" align="right">Petugas,</h6>
                <br><br><br><br>
                <h6 class="m-0 font-weight-bold text-dark" align="right"><?php echo $_SESSION['nama_petugas']; ?>
                </h6>
               
            </div>
          </div>
            </div>
            
            </div>
            
</div>

</body>
</html>