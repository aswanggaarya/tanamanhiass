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
      <a class="navbar-brand" href="<?= base_url() ?>home/index">
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
  <div class="container" style="margin-top: 3%;">

    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <h5 class="card-header">Nominal Yang Dibayarkan</h5>
          <div class="card-body">
            <h5 class="card-title">
              <?php  
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                  foreach ($keranjang as $item) {
                    $grand_total = $grand_total + $item['subtotal'];
                  }
                echo "<p style='color: green;'>Rp ".number_format($grand_total, 0, ',', '.')."</p>";
                
              ?>
            </h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h5>Input Alamat Pengirim dan Metode Pembayaran</h5>
        <form method="post" action="<?= base_url() ?>home/prosespesanan">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama">
          </div>
          <div class="form-group">
            <label>Alamat Lengkap</label>
            <input class="form-control" type="text" name="alamat">
          </div>
          <div class="form-group">
            <label>No. Telepon</label>
            <input class="form-control" type="number" name="notelp">
          </div>
          <div class="form-group">
            <label>Jasa Pengiriman</label>
            <select class="form-control">
              <option>JNE</option>
              <option>JNT</option>
              <option>TIKI</option>
              <option>GOSEND</option>
            </select>
          </div>
          <div class="form-group">
            <label>Bank</label>
            <select class="form-control">
              <option>BCA - 8368362832</option>
              <option>BRI - 7668362832</option>
              <option>MANDIRI - 3268362832</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success mt-3">Buat Pesanan</button>
        </form>
        <?php 
          }else{
            echo "<p style='color: green;'>Keranjang Belanja Anda Masih Kosong</p>";
          }
        ?>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <!-- <footer class="py-5 bg-light">
    <div class="container">
      <p class="m-0 text-center" style="color: #434343;">Copyright &copy; Toko Tanaman Hias</p>
    </div> -->
    <!-- /.container -->
  <!-- </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
