<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Desi Laundry</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
          <span class="text-blue font-weight-bold">Laundry</span>
        </a>
      </div>
      <div class="navbar-inner">
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="home.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah_member.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Add Member</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_member.php">
                <i class="ni ni-single-02 text-pink"></i>
                <span class="nav-link-text">Show Member</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah_user.php">
                <i class="ni ni-circle-08 text-blue"></i>
                <span class="nav-link-text">Add User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_user.php">
                <i class="ni ni-circle-08 text-orange"></i>
                <span class="nav-link-text">Show User</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tambah_paket.php">
                  <i class="ni ni-box-2 text-primary"></i>
                  <span class="nav-link-text">Add Package</span>
                </a>
                <li class="nav-item">
                <a class="nav-link" href="tampil_paket.php">
                  <i class="ni ni-box-2 text-orange"></i>
                  <span class="nav-link-text">Show Package</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi.php">
                <i class="ni ni-single-copy-04 text-green"></i>
                <span class="nav-link-text">Add transaction</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_transaksi.php">
                <i class="ni ni-single-copy-04 text-red"></i>
                <span class="nav-link-text">Show transaction</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="detail_transaksi.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Add detail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_detail_transaksi.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Show detail</span>
              </a>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 >
          </h6>
          <!-- Navigation -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
              
                <!-- View all -->
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Add</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Add Detail Transaction</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h4 class="mb-0"></h4>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                </thead>
<body>
    <div class="container">
        <center><h3> Add Detail Transaction</h3></center>

        <form action="transaksi.php" method="post">

            Id Transaction :

            <select name="id_transaksi" class="form-control">

                <option></option>

                <?php

                include "koneksi.php";

                $qry_transaksi = mysqli_query($conn, "select * from transaksi");

                while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {

                    echo '<option value="' . $data_transaksi['id_transaksi'] . '">' . $data_transaksi['id_transaksi'] . '</option>';
                }

                ?>

            </select>

            Id package :

            <select name="id_paket" class="form-control">

                <option></option>

                <?php

                include "koneksi.php";

                $qry_produk = mysqli_query($conn, "select * from paket");

                while ($data_produk = mysqli_fetch_array($qry_produk)) {

                    echo '<option value="' . $data_produk['id_paket'] . '">' . $data_produk['nama_paket'] . '</option>';
                }

                ?>

            </select>

            Quantity :

            <input type="number" name="qty" value="" class="form-control">


            <input type="submit" name="simpan" value="Add" class="btn btn-primary">

        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>