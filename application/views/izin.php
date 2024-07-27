<!-- Main content -->
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Jenis Izin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('izin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Tambah Jenis Izin</i></a>
                </div>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Izin</th>
                        <!-- <th>Password</th> -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($izin as $izin_item) : ?>
                    <tbody>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $izin_item->jenis_izin ?></td>
                            <!-- <td><?= $izin_item->password ?></td> -->
                            <td>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $izin_item->id ?>"> <i class="fas fa-edit"></i></button>
                                <a href=" <?= base_url('izin/delete/' . $izin_item->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Untuk Menghapus data ini ?')"> <i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- /.card-body -->

<!-- Modal Edit -->
<?php foreach ($izin as $izin_item) : ?>
    <?php if (is_object($izin_item)) : ?>
        <div class="modal fade" id="edit<?= $izin_item->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Izin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('izin/edit/' . $izin_item->id) ?>" method="POST">
                            <div class="form-group">
                                <label>Jenis Izin</label>
                                <input type="text" name="jenis_izin" class="form-control" value="<?= $izin_item->jenis_izin ?>">
                                <?= form_error('jenis_izin', '<div class="text-small text-danger">', '</div>') ?>
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
    <?php else : ?>
        <p>Error: Item is not an object</p>
        <?php var_dump($izin_item); ?>
    <?php endif; ?>
<?php endforeach; ?>