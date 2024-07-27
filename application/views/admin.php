      <!-- Main content -->
<?= $this->session->flashdata('pesan'); ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                <div class="card">
                 <div class="card-header">
                    <a href="<?= base_url('admin/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Tambah Admin</i></a>
                </div>
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                    <?php $no = 1; ?>
                    <?php foreach($admin as $adm): ?>
                <tbody> 
                <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $adm->username ?></td>
                        <td><?= $adm->password ?></td>
                        <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $adm->id ?>"> <i class="fas fa-edit"></i></button>
                        <a href=" <?= base_url('admin/delete/' . $adm->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Untuk Menghapus data ini ?')"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
                </table>
              </div>
            </div>
              <!-- /.card-body -->

               <!-- Modal Edit -->
        <?php foreach($admin as $adm){ ?>
        <div class="modal fade" id="edit<?= $adm->id  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/edit/' . $adm->id) ?>" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $adm->username ?>">
                        <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $adm->password ?>">
                        <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
        </div>
        <?php }; ?>