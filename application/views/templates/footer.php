</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer bg-dark">
    <div class="float-right d-none d-sm-block-footer-not-fixed ">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023-2024 <a href="#">Dai Peduli</a> . </strong> 
    Jl. Nasional III, Ciherang, Kec. Nagreg, Kabupaten Bandung, Jawa Barat 40215
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>

<!-- jQuery -->
<script src="<?= base_url('assets/tamplate')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/tamplate')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/tamplate')?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/tamplate')?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/tamplate')?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/tamplate')?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/tamplate')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/tamplate')?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk mengisi input form dengan waktu real-time
        function updateCheckinTime() {
            const inputCheckin = document.getElementById('checkin');
            const now = new Date();
            const hh = String(now.getHours()).padStart(2, '0');
            const mm = String(now.getMinutes()).padStart(2, '0');
            const ss = String(now.getSeconds()).padStart(2, '0');
            const currentTime = `${hh}:${mm}:${ss}`;
            inputCheckin.value = currentTime;
        }

        // Panggil fungsi untuk mengisi waktu saat halaman dimuat
        updateCheckinTime();

        // Refresh waktu setiap detik (jika Anda ingin waktu real-time yang terus berubah)
        setInterval(updateCheckinTime, 1000);
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk mengisi input form dengan waktu real-time
        function updateCheckoutTime() {
            const inputCheckout = document.getElementById('checkout');
            const now = new Date();
            const hh = String(now.getHours()).padStart(2, '0');
            const mm = String(now.getMinutes()).padStart(2, '0');
            const ss = String(now.getSeconds()).padStart(2, '0');
            const currentTime = `${hh}:${mm}:${ss}`;
            inputCheckout.value = currentTime;
        }

        // Panggil fungsi untuk mengisi waktu saat halaman dimuat
        updateCheckoutTime();

        // Refresh waktu setiap detik (jika Anda ingin waktu real-time yang terus berubah)
        setInterval(updateCheckoutTime, 1000);
    });
    
</script>
<script>
function printPage() {
    window.print();
}
</script>


</body>
</html>