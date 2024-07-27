<!-- <?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <section class="content-header">
        <center>
            <h2>Checkout Pegawai</h2>
        </center>
    </section>
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="<?= base_url('Absensi/update_checkout') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">NIP</label>
                                    <input type="text" name="nip" class="form-control item" id="user" placeholder="nip" value="<?php echo $this->session->userdata('nip'); ?> " readonly>
                                </div>
                                <div class="form-group">
                                    <label>Checkout</label>
                                    <input type="text" name="checkout" class="form-control item" id="checkin" placeholder="hh:mm:ss" readonly>
                                </div>
                                <div class="form-group">
                                    <label> Pekerjaan yang diselesaikan</label>
                                    <textarea name="pekerjaan" id="pekerjaan" class="form-control item"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div> -->

<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <section class="content-header">
        <center>
            <h2>Checkout Pegawai</h2>
        </center>
    </section>
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Tampilkan pesan kesalahan validasi -->
                            <form action="<?= base_url('Absensi/update_checkout') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">NIP</label>
                                    <input type="text" name="nip" class="form-control item" id="user" placeholder="nip" value="<?php echo $this->session->userdata('nip'); ?> " readonly>
                                </div>
                                <div class="form-group">
                                    <label>Checkout</label>
                                    <input type="text" name="checkout" class="form-control item" id="checkin" placeholder="hh:mm:ss" readonly>
                                </div>
                                <div class="form-group">
                                    <label> Pekerjaan yang diselesaikan</label>
                                    <textarea name="pekerjaan" id="pekerjaan" class="form-control item"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>