<?php require_once 'php_action/db_connect.php'; ?>
<?php require_once 'php_action/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WEB PEMBAYARAN LISTRIK</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-bolt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pembayaran Listrik</div>
      </a>
      <!-- Divider -->
   

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="pelanggan.php">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>Pelanggan</span></a>
    
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="penggunaan.php">
          <i class="fas fa-fw fa-bolt"></i>
          <span>Penggunaan</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tagihan.php">
          <i class="fas fa-fw fa-hand-holding-usd"></i>
          <span>Tagihan</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tarif.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Tarif</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="user.php">
          <i class="fas fa-user"></i>
          <span> User</span></a>
      </li>
      <!-- Divider -->
      <!-- Heading -->
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          <a href="logout.php" class="btn btn-danger" role="button" onclick="return confirm('apakah anda yakin untuk keluar dari halaman?')"><i class="fas fa-sign-out-alt"></i>logout</a>
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
              <!-- Dropdown - Messages -->
             
            <!-- Nav Item - Alerts -->
            
               
            <!-- Nav Item - User Information -->
                          <!-- Dropdown - User Information -->
             

          </ul>
        </nav>
