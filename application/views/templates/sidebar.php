<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Dai Peduli ||</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/tamplate/') ?>dist/img/daipeduli.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light text-sm">Dai Peduli</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/tamplate/') ?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- menu dropdown1 -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link <?php if ($this->uri->segment(1) == 'datamaster') echo 'active' ?>">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin') echo 'active' ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pegawai') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'pegawai') echo 'active' ?>" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pegawai</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pekerjaan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'pekerjaan') echo 'active' ?>" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pekerjaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('izin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'izin') echo 'active' ?>" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Izin</p>
                  </a>
                </li>

              </ul>
            </li>

            <!-- end menu dropdown1 -->

            <!-- menu dropdown2 -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-history "></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('presensi') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'presensi') echo 'active' ?>">
                    <i class=" far fa-circle nav-icon "></i>
                    <p>Lap Absen Harian</p>
                  </a>
                  <a href="<?= base_url('lapbulan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'lapbulan') echo 'active' ?>">
                    <i class=" far fa-circle nav-icon "></i>
                    <p>Lap Absen Bulanan</p>
                  </a>
                </li>
                <!-- end menu dropdown2 -->
              </ul>
            <li class="nav-item">
              <a href="<?= base_url('signin') ?>" class="nav-link" onclick="return confirm('Apakah anda yakin Untuk Logout Sebagai admin ?')" <?php if ($this->uri->segment(1) == 'signin') echo 'active' ?>>
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">