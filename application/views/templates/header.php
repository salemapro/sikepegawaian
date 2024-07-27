<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Admin Kepegawaian | <?= $title?> 
  </title>
 <!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('assets/tamplate')?>/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/tamplate')?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets/tamplate')?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('assets/tamplate')?>/dist/css/adminlte.min.css">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     
<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/tamplate/dist/img/daipeduli.png') ?>">


<!-- CSS Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!-- Javascript Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<!-- Javascript Bootstrap Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

  <style>
  .login-box-container {
    display: flex;
    justify-content: center; /* Untuk membuat elemen menjadi tengah secara horizontal */
    align-items: center; /* Untuk membuat elemen menjadi tengah secara vertikal */
    height: 100vh; /* Untuk mengisi seluruh tinggi viewport */
  }
  .login-box {
    width: 400px; /* Sesuaikan dengan lebar yang Anda inginkan */
  }
  .logo-img {
    max-width: 40px; /* Sesuaikan ukuran gambar sesuai keinginan Anda */
    height: auto; /* Otomatis mengatur tinggi agar sesuai dengan aspek gambar */
    vertical-align: middle; /* Agar logo sejajar dengan teks di tengah vertikal */
    margin-right: 10px; /* Jarak antara logo dan teks CV */
  }
  .imagess {
    background: url(assets/tamplate/dist/img/daipeduli.png); 
  }
</style>
 
</head>

  