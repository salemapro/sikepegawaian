<div class="card">
    <section class="content-header">
        <center>
            <h2> Masukan Detail Pekerjaan</h2>
        </center>
    </section>
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="<?= base_url('pekerjaan/tambah_aksi') ?>" method="POST">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control">
                                    <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Detail Pekerjaan</label>
                                    <input type="text" name="detail_pekerjaan" class="form-control">
                                    <?= form_error('detail_pekerjaan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>