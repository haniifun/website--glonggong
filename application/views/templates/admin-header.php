<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/logo-brebes-min.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font.css">
  
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.css">

  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/toastr/toastr.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<!--       <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link elevation-4">
      <img src="<?= base_url('assets/') ?>img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Glonggong.id</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) --><!-- 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/') ?>img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview <?php $menu=['','post','kategori']; if(in_array($page, $menu)) echo 'menu-open' ?>">
            <a href="#" class="nav-link <?php $menu=['','post','kategori']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Berita & Informasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin') ?>" class="nav-link <?php if($page == '') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posting Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori') ?>" class="nav-link <?php if($page == 'kategori') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Berita</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/profilDesa') ?>" class="nav-link  <?php $menu=['profilDesa','editVisi','editMisi','editSejarah']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Profil Desa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php $menu=['pemerintahDesa','lpm','bpd','pkk','karangTaruna']; if(in_array($page, $menu)) echo 'menu-open' ?>">
            <a href="#" class="nav-link <?php $menu=['pemerintahDesa','lpm','bpd','pkk','karangTaruna']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Struktur Organisasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pemerintahDesa') ?>" class="nav-link <?php if($page == 'pemerintahDesa') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemerintah Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/lpm') ?>" class="nav-link <?php if($page == 'lpm') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LPM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/bpd') ?>" class="nav-link <?php if($page == 'bpd') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pkk') ?>" class="nav-link <?php if($page == 'pkk') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PKK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/karangTaruna') ?>" class="nav-link <?php if($page == 'karangTaruna') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karang Taruna</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php $menu=['umkmm']; if(in_array($page, $menu)) echo 'menu-open' ?>">
            <a href="#" class="nav-link <?php $menu=['umkm']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Potensi Desa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/umkm') ?>" class="nav-link <?php if($page == 'umkm') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UMKM</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview <?php $menu=['kependudukan','apbdes','formulir']; if(in_array($page, $menu)) echo 'menu-open' ?>">
            <a href="#" class="nav-link <?php $menu=['kependudukan','apbdes','formulir']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/apbdes') ?>" class="nav-link <?php if($page == 'apbdes') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>APBDES</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/formulir') ?>" class="nav-link <?php if($page == 'formulir') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Formulir</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php $menu=['kependudukan','apbdes','formulir']; if(in_array($page, $menu)) echo 'menu-open' ?>">
            <a href="#" class="nav-link <?php $menu=['kependudukan','apbdes','formulir']; if(in_array($page, $menu)) echo 'active' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Monografi Penduduk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kependudukanKK') ?>" class="nav-link <?php if($page == 'kependudukan') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kepala Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kependudukanGender') ?>" class="nav-link <?php if($page == 'apbdes') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berdasarkan Gender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kependudukanUmur') ?>" class="nav-link <?php if($page == 'formulir') echo 'active' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berdasarkan Umur</p>
                </a>
              </li>
            </ul>
          </li>

          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>