      <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lap Absensi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>Tanggal</th>
                  </tr>
                  </thead>
                <tbody>
                  <?php $no = 1; 
                  foreach($transaksi as $tra) :?>
                <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $tra->nip ?></td>
                        <td><?= $tra->checkin ?></td>
                        <td><?= $tra->checkout ?></td>
                        <td><?= $tra->tanggal ?></td>
                        <td>
                        <a href="<?= base_url('transaksi/delete/' . $tra->id_absen) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Untuk Menghapus data ini ?')"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach;?>
                </table>
              </div>
            </div>
              <!-- /.card-body -->
             <!-- Button trigger modal -->
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Absensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
