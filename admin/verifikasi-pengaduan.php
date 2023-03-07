<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body" style="font-size: 14px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl Pengaduan</th>
                      <th>Nik</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                   
                  </tfoot>
                  <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT*FROM pengaduan ORDER BY id_pengaduan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;

                    while ($data=mysqli_fetch_array($query)){ ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['tgl_pengaduan']; ?></td>
                      <td><?= $data['nik']; ?></td>
                      <td><?= $data['isi_laporan']; ?></td>
                      <td><img src="../foto/<?php echo $data['foto'];?>" width="150"></td>
                      <td><?= $data['status']; ?></td>
                      <td>
                          

                         <?php 
                          if ($data['status'] == 'belum diproses') {
                        ?>
                        <!--ini tombol-->
                        <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-5">
                                <i class="fa fa-check"></i>
                            </span>
                          <span class="text"> Detail & verifikasi </span>
                        </a>
                         <?php 
                          }
                        ?>

                        <?php 
                          if ($data['status'] == 'proses') {
                        ?>

                        <!--ini tombol-->
                        <a href="?url=tanggapan-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-5">
                                <i class="fa fa-check"></i>
                            </span>
                          <span class="text"> Tanggapi </span>
                        </a>
                        <?php 
                          }
                        ?>
                        <?php 
                          if ($data['status'] == 'selesai') {
                        ?>

                        <!--ini tombol-->
                        <a href="?url=lihat-tanggapan1&id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-5">
                                <i class="fa fa-check"></i>
                            </span>
                          <span class="text"> Lihat Tanggapan </span>
                        </a>
                        <?php 
                          }
                        ?>
                       
                        <?php 
                          if ($data['status'] == 'selesai') {
                        ?>

                          <a href="delete-pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>"class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin Mau Hapus?')">
                                    <span class="icon text-white-5">
                                    <i class="fa fa-trash"></i>
                                   </span>
                                  <span class="text"> Hapus</span></a>
                           <?php 
                          }
                        ?>           
                         <?php 
                          if ($data['status'] == 'proses') {
                        ?>

                          <a href="delete-pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>"class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin Mau Hapus?')">
                                    <span class="icon text-white-5">
                                    <i class="fa fa-trash"></i>
                                   </span>
                                  <span class="text"> Hapus</span></a>
                           <?php 
                          }
                        ?>          
                         <?php 
                          if ($data['status'] == 'Ditolak') {
                        ?>

                          <a href="delete-pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>"class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin Mau Hapus?')">
                                    <span class="icon text-white-5">
                                    <i class="fa fa-trash"></i>
                                   </span>
                                  <span class="text"> Hapus</span></a>
                           <?php 
                          }
                        ?>                        
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>