 <!-- Main content -->
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">Laporan Absensi Harian</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <!-- Tampilkan pesan flash data jika ada -->
         <?= $this->session->flashdata('pesan'); ?>

         <!-- Tampilkan form untuk memfilter data -->
         <div class="card">
             <div class="card-header">
                 <form action="<?php echo site_url('presensi/viewByDate'); ?>" method="post">
                     <label for="tanggal">Tanggal:</label>
                     <input type="date" name="tanggal" id="tanggal">
                     <button type="submit" class="btn btn-primary btn-sm rounded-pill">Tampilkan Data</button>
                 </form>
             </div>
         </div>

         <!-- Tampilkan tabel data jika ada data untuk ditampilkan -->
         <?php if (!empty($lapabsensi)) { ?>
             <table id="example2" class="table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>NIP</th>
                         <th>Nama Pegawai</th>
                         <th>Checkin</th>
                         <th>Checkout</th>
                         <th>Izin</th>
                         <th>Keterangan</th>
                         <th>Pekerjaan Selesai</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($lapabsensi as $record) : ?>
                         <tr>
                             <td><?php echo $record->nip; ?></td>
                             <td><?php echo $record->nama_lengkap; ?></td>
                             <td><?php echo $record->checkin; ?></td>
                             <td><?php echo $record->checkout; ?></td>
                             <td><?php echo $record->jenis_izin; ?></td>
                             <td><?php echo $record->keterangan; ?></td>
                             <td><?php echo $record->pekerjaan_selesai; ?></td>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         <?php } else { ?>
             <!-- Tampilkan pesan jika tidak ada data yang sesuai -->
             <p>Tidak ada data yang sesuai dengan tanggal yang dimasukkan.</p>
         <?php } ?>
     </div>
 </div>