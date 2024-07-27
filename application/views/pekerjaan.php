<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pekerjaan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Tambah Pekerjaan</i></a>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Detail Pekerjaan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($pekerjaan as $pek) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $pek->nip ?></td>
                        <td><?= $pek->detail_pekerjaan ?></td>
                        <td><?= $pek->created_at ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $pek->id  ?>"> <i class="fas fa-edit"></i></button>
                            <a href=" <?= base_url('pekerjaan/delete/' . $pek->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Untuk Menghapus data ini ?')"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<!-- Modal Edit -->
<?php foreach ($pekerjaan as $pek) { ?>
    <div class="modal fade" id="edit<?= $pek->id  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pekerjaan/edit/' . $pek->id) ?>" method="POST">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" value="<?= $pek->nip ?>">
                            <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Detail Pekerjaan</label>
                            <input type="text" name="detail_pekerjaan" class="form-control" value="<?= $pek->detail_pekerjaan ?>">
                            <?= form_error('detail_pekerjaan', '<div class="text-small text-danger">', '</div>') ?>
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