<?= $this->session->flashdata('pesan'); ?>
<div class="card">
            <div class="card-header">
            <a href="<?= base_url('pegawai/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Tambah Pegawai</i></a>
        </div>
        
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>Instansi</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach($pegawai as $pgw): ?>
                <tbody>
                <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $pgw->nip ?></td>
                        <td><?= $pgw->nama_lengkap ?></td>
                        <td><?= $pgw->jabatan ?></td>
                        <td><?= $pgw->instansi ?></td>
                        <td><?= $pgw->alamat ?></td>
                        <td><?= $pgw->email ?></td>
                        <td><?= $pgw->password ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $pgw->id_pegawai  ?>"> <i class="fas fa-edit"></i></button>
                            <a href=" <?= base_url('pegawai/delete/' . $pgw->id_pegawai) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Untuk Menghapus data ini ?')"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
                </table>
            </div>
</div>


    <!-- Modal Edit -->
    <?php foreach($pegawai as $pgw){ ?>
    <div class="modal fade" id="edit<?= $pgw->id_pegawai  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('pegawai/edit/' . $pgw->id_pegawai) ?>" method="POST">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" value="<?= $pgw->nip ?>">
                    <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $pgw->nama_lengkap ?>">
                    <?= form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="<?= $pgw->jabatan ?>">
                    <?= form_error('jabatan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" name="instansi" class="form-control" value="<?= $pgw->instansi ?>">
                    <?= form_error('instansi', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" value="<?= $pgw->alamat ?>"></textarea>
                    <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $pgw->email ?>">
                    <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?= $pgw->password ?>">
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
