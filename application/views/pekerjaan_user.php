<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pekerja</th>
                    <th>Detail Pekerjaan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($pekerjaan as $pek) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $pek->nip ?></td>
                        <td><?= $pek->nama_lengkap ?></td>
                        <td><?= $pek->detail_pekerjaan ?></td>
                        <td><?= $pek->created_at ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>