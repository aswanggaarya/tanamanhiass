<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Toko Tanaman Hias</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?=base_url()?>">
        <img src="<?=base_url('assets/')?>img/logo1.png" width="230" height="60" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-left: 2%; width: 60%;">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-1 small" placeholder="Cari Produk" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-success" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

            <a class="nav-link" href="#" style="color: #28A745;"><b>Masuk/Daftar</b></a>
          </li>
        </ul>
        <div class="navbar">
          <ul class="nav navbar-nav navbar-right">
            <?php  
              $keranjang = ''.$this->cart->total_items(). ' Items'
            ?>

            <?php echo anchor('home/detailkeranjang', $keranjang); ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3" style="margin-top: 5%;">

        <h5 style="margin-top: 10%;">KATEGORI</h5>
        <div class="list-group">
          <a href="<?=base_url('home/tanamankaktus')?>" class="list-group-item" style="color: green; text-decoration: none;">Tanaman Kaktus</a>
          <a href="<?=base_url('home/tanamananggrek')?>" class="list-group-item" style="color: green; text-decoration: none;">Tanaman Anggrek</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
        
          <div class="row">
            <?php foreach ($tanamananggrek as $brg) : ?>
              <div class="col-lg-4 col-md-6">
               
                  <div class="card" style="border: 0;">
                    <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar; ?>" alt="">
                    <div class="card-body">
                      <h6 class="card-title">
                        <a style="color: black; text-decoration: none;"><?php echo $brg->namabarang; ?></a>
                      </h6>
                        
                      <h6 style="color: #FF4200; margin-top: -3%;">Rp <?php echo number_format($brg->harga, 0,',','.') ?></h6>
                      <p><i class="fas fa-map-marker-alt"></i> Kota <?php echo $brg->lokasi; ?></p>
                      <?php echo anchor('home/tambahkeranjang/'.$brg->idbarang, '<div class="btn btn-success">BELI SEKARANG</div>') ?>
                      <?php echo anchor('home/detail/'.$brg->idbarang, '<div class="btn btn-secondary">BUKA</div>') ?>
                    </div>
                  </div>
               
              </div>
            <?php endforeach; ?>
          </div>
          <!-- /.row -->

        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-light">
    <div class="container">
      <p class="m-0 text-center" style="color: #434343;">Copyright &copy; Toko Tanaman Hias</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
