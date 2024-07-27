<div class="card">
                <section class="content-header">
                    <center> <h2> Masukan Daftar Pegawai</h2> </center>
                </section>
                <section class="content-header">
                    <div class="container">
                    <div class="row">
                            ` <div class="col-12">
                                <div class="card">
                                <div class="card-header">
                                <form action="<?= base_url('pegawai/tambah_aksi') ?>" method="POST">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="nip" class="form-control">
                                            <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control">
                                            <?= form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control">
                                            <?= form_error('jabatan', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Instansi</label>
                                            <input type="text" name="instansi" class="form-control">
                                            <?= form_error('instansi', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control"></textarea>
                                            <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control">
                                            <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input type="text" name="password" class="form-control">
                                            <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Batal</button>
                                    </form>
                                 </div>
                                    </div>
                                 </div>
                                <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            </div>
                            <!-- /.row -->`
                    </div>
                    </section>
            </div>
   
    