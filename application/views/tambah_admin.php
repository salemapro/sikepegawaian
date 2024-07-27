<div class="card">
                <section class="content-header">
                    <center> <h2> Masukan Daftar Admin</h2> </center>
                </section>
                <section class="content-header">
                    <div class="container">
                    <div class="row">
                            ` <div class="col-12">
                                <div class="card">
                                <div class="card-header">
                                                                    
                                    <form action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control">
                                            <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" class="form-control">
                                            <?= form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
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
   