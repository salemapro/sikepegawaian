<!-- <?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <section class="content-header">
        <center>
            <h2> Checkin Pegawai </h2>
        </center>
    </section>
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="<?= base_url('absensi/tambah_aksi') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">NIP</label>
                                    <input type="text" name="nip" class="form-control item" id="user" placeholder="nip" value="<?php echo $this->session->userdata('nip'); ?> " readonly>
                                </div>
                                <div class="form-group">
                                    <label>Checkin</label>
                                    <input type="text" name="checkin" class="form-control item" id="checkin" placeholder="hh:mm:ss" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="izin">Izin</label>
                                    <select name="izin" id="izin" class="form-control">
                                        <option value="0" selected>Tidak</option>
                                        <?php foreach ($izin as $row) { ?>
                                            <option value="<?= $row->id ?>"> <?= $row->jenis_izin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <select name="keterangan" id="keterangan" class="form-control">
                                        <option value="" selected disabled>--pilih tempat bekerja--</option>
                                        <option value="1">Bekerja dari rumah</option>
                                        <option value="2">Bekerja di kantor</option>
                                    </select>
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
            <h2> Checkin Pegawai </h2>
        </center>
    </section>
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="<?= base_url('absensi/tambah_aksi') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">NIP</label>
                                    <input type="text" name="nip" class="form-control item" id="user" placeholder="nip" value="<?= $this->session->userdata('nip'); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Checkin</label>
                                    <input type="text" name="checkin" class="form-control item" id="checkin" placeholder="hh:mm:ss" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="izin">Izin</label>
                                    <select name="izin" id="izin" class="form-control" onchange="selectKeterangan()">
                                        <!-- <option value="0" selected>Tidak</option> -->
                                        <?php foreach ($izin as $row) { ?>
                                            <option value="<?= $row->id ?>"> <?= $row->jenis_izin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="formKet">
                                    <label for="ket">Keterangan</label>
                                    <select name="keterangan" id="keterangan" class="form-control">
                                        <option value="" selected disabled>--pilih tempat bekerja--</option>
                                        <option value="Bekerja dari rumah">Bekerja dari rumah</option>
                                        <option value="Bekerja di kantor">Bekerja di kantor</option>
                                    </select>
                                </div>
                                <?php if (isset($pekerjaan->detail_pekerjaan)) { ?>
                                    <div class="form-group">
                                        <label>Pekerjaan Hari Ini</label>
                                        <textarea name="pekerjaan" id="pekerjaan" class="form-control" readonly><?= isset($pekerjaan->detail_pekerjaan) ? $pekerjaan->detail_pekerjaan : '' ?></textarea>
                                    </div>
                                <?php } ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // $('#formKet').hide();
    });

    function selectKeterangan() {
        var izin = $("#izin").val();

        if (izin != 1) {
            $('#formKet').hide();
        } else {
            $('#formKet').show();
        }
    }
</script>