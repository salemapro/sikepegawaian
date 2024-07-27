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
        <a href="<?= base_url('absensi')?>" class="nav-link" <?php if($this->uri->segment(1) == 'absensi') echo 'active' ?>>Checkin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('checkout')?>" class="nav-link" onclick="return confirm('Apakah anda Sudah melakukan checkin terlebih dahulu?? , jika belum inputkan terlebih dahulu!! ')" <?php if($this->uri->segment(1) == 'checkout') echo 'active' ?>>Checkout</a>
      </li>
      
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url('assets/tamplate/') ?>dist/img/daipeduli.png" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-sm">Dai Peduli</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/tamplate/') ?>dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
                <a href="<?= base_url('absensi')?>" class="nav-link <?php if($this->uri->segment(1) == 'absensi') echo 'active' ?>" >
                  <i class="nav-icon fas fa-clock"></i>
                  <p>Absensi</p>
                </a>
          </li>
          
          <li class="nav-item">
                <a href="<?= base_url('usersignin')?>" class="nav-link" onclick="return confirm('Apakah anda yakin Untuk Logout  ?')" <?php if($this->uri->segment(1) == 'usersignin') echo 'active' ?>>
                  <i class="nav-icon fa fa-sign-out-alt" ></i>
                  <p>Logout</p>
                </a>
        </li>

        </ul>
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
