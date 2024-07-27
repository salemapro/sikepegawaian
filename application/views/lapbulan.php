 <!-- Main content -->
 <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan Absensi Bulanan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Tampilkan pesan flash data jika ada -->
            <?= $this->session->flashdata('pesan'); ?>

            <!-- Tampilkan form untuk memfilter data -->
            <div class="card">
                <div class="card-header">
                <form action="<?php echo site_url('Lapbulan/viewByMonth'); ?>" method="post">
                        <label for="bulan">Bulan:</label>
                        <select name="bulan" id="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm rounded-pill">Tampilkan Data</button>
                    </form>

                </div>
            </div>

           
            <!-- Tampilkan tabel data jika ada data untuk ditampilkan -->
            <?php if (!empty($lapbulan)) { ?>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Jumlah Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lapbulan as $record): ?>
                            <tr>
                                <td><?php echo $record->nip; ?></td>
                                <td><?php echo $record->nama_lengkap; ?></td>
                                <td><?php echo $record->jumlah_kehadiran; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <!-- Tampilkan pesan jika tidak ada data yang sesuai -->
                <p>Tidak ada data yang sesuai dengan bulan yang dipilih.</p>
            <?php } ?>
        </div>
    </div>