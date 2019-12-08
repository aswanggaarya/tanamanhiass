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

      <!-- Area Chart -->
      <div class="card shadow">
        <div class="card-body">
          <div class="chart-area">
            
            <h3>Keranjang</h3>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Subtotal</th>
                </tr>
              </thead>
              <?php 
                $no = 1;
                foreach($this->cart->contents() as $items){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $items['name'] ?></td>
                  <td><?php echo $items['qty'] ?></td>
                  <td>Rp <?php echo number_format($items['price'], 0,',','.') ?></td>
                  <td>Rp <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
              <?php } ?>
                <tr>
                  <td colspan="3"></td>
                  <td align="left"><b>Total</b></td>
                  <td align="right" style="color: green;"><b>Rp <?php echo number_format($this->cart->total(), 0,',','.') ?></b></td>
                </tr>
            </table>
            <div align="right">
              <a href="<?= base_url('home/hapuskeranjang') ?>"><div class="btn btn-secondary">Hapus Items</div></a>
              <a href="<?= base_url('home/bayar') ?>"><div class="btn btn-success">Bayar Sekarang</div></a>
            </div>
          </div>
        </div>
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
