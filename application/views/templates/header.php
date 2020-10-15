<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/logo-brebes-min.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font.css">
  	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
<!--     <style>
    	body{
    		font-size: 14px;
    	}
    </style>
 -->
    <title><?= $title ?></title>
  </head>
  <body class="bg-light">

  	<img src="<?= base_url('assets/') ?>img/banner.jpeg" width="100%">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    	<div class="container-fluid mx-3">
	  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link font-weight-bold text-uppercase" href="<?= base_url('berita') ?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Profil Desa
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?= base_url('profil') ?>">Visi dan Misi</a>
		          <a class="dropdown-item" href="<?= base_url('profil') ?>">Sejarah Desa</a>
		          <a class="dropdown-item" href="<?= base_url('profil/strukturOrganisasi') ?>">Struktur Pemerintahan Desa</a>
		          <a class="dropdown-item" href="<?= base_url('profil/proker') ?>">Program Kerja Desa</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white font-weight-bold text-uppercase " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Lembaga
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?= base_url('lembaga/bpd') ?>">BPD</a>
		          <a class="dropdown-item" href="<?= base_url('lembaga/lpm') ?>">LPM</a>
		          <a class="dropdown-item" href="<?= base_url('lembaga/pkk') ?>">PKK</a>
		          <a class="dropdown-item" href="<?= base_url('lembaga/karangTaruna') ?>">Karang Taruna</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Potensi Desa
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?= base_url('potensi/umkm') ?>">UMKM</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Data Desa
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?= base_url('data/kependudukan') ?>">Data Kependudukan</a>
		          <a class="dropdown-item" href="<?= base_url('data/apbdes') ?>">APBDES</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Pelayanan
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?= base_url('pelayanan/ktp') ?>">Pendaftaran Online</a>
		          <a class="dropdown-item" href="<?= base_url('pelayanan/download') ?>">Download File</a>
		          <ul class="navbar-nav">
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown">
				          Pendaftaran Online
				        </a>
				        <div class="dropdown-menu">
				          <a class="dropdown-item" href="<?= base_url('pelayanan/ktp') ?>">Permohonan KTP</a>
				          <a class="dropdown-item" href="<?= base_url('pelayanan/download') ?>">Permohonan Kartu Keluarga</a>
				        </div>


				      </li>
		          </ul>
		        </div>
		      </li>
		    </ul>
		    <form class="form-inline" method="post" action="<?= base_url('berita/search') ?>">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
			    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		  </div>
	  </div>
	</nav>