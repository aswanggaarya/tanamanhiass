<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Registrasi</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this form-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>css/style.css">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom scripts for form-->
  <script src="https://code.jquery.com/jquery-2.1.0.js" integrity="sha256-D6d1KSapXjq2tfZ6Ie9AYozkRHyB3fT2ys9mO2+4Wvc=" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.js"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion" id="accordionSidebar" style="background-color: #ECECA3;">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/')?>">
              <img src="<?=base_url('assets/')?>img/logo1.png" width="150" height="40" class="d-inline-block align-top" alt="">
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Menu
          </div>

          <!-- Nav Item - Charts -->
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('admin/registrasi')?>">
              <span style="color: #469315;">Registrasi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/barang')?>">
              <span style="color: #469315;">Barang</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/invocie')?>">
              <span style="color: #469315;">Invoice</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
              <span style="color: #469315;">Logout</span>
            </a>
          </li>

        </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php foreach ($admin as $p) {?>
                   <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $p->namaadmin ?></span>
                <?php }?>
               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  MyProfile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-8 col-lg-4">

              <!-- Area Chart -->
              <div class="card shadow">
                <div class="card-body">
                  <div class="chart-area">
                    
                    <h3>List Admin</h3>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#adddataadmin">Tambah Data</button>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Username</th>
                          <th scope="col">Nama Admin</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach($dataadmin as $p){ 
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $p->username ?></td>
                          <td><?php echo $p->namaadmin ?></td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatedataadmin<?php echo $p->idadmin ?>">Ubah</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedataadmin<?php echo $p->idadmin ?>">Hapus</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>

                  </div>
                </div>
              </div>

                <!-- Modal Add admin -->
                <div class="modal fade" id="adddataadmin" tabindex="-1" role="dialog" aria-labelledby="adddataadminLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddataadminLabel" style="color: black;">Add Data Of Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <form action="<?php echo base_url(). 'admin/tambahadmin'; ?>" method="post" id="form-barang">
                        <div class="modal-body">
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Username</b></p>
                            <input type="text" class="form-control" id="username" name="username">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Password</b></p>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Nama Admin</b></p>
                            <input type="text" class="form-control" id="namaadmin" name="namaadmin">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                          <input class="btn btn-success" type="submit" value="Tambah">
                        </div>
                        </td>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus admin -->
                <?php foreach($dataadmin as $p){ ?>
                  <div class="modal fade" id="deletedataadmin<?php echo $p->idadmin ?>" tabindex="-1" role="dialog" aria-labelledby="adddataadminLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="adddataadminLabel" style="color: black;">Delete Data Of Admin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                          <form action="<?php echo base_url().'admin/hapusadmin'?>" method="post">
                            <div class="modal-body">
                                <p>You  want to delete <b><?php echo $p->namaadmin;?></b>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <?php echo anchor('admin/hapusadmin/'.$p->idadmin,'<button type="button" class="btn btn-danger">Hapus</button>'); ?>
                            </div>
                          </form>
                        
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <!-- Modal Update admin -->
                <?php foreach($dataadmin as $p){ ?>
                  <div class="modal fade" id="updatedataadmin<?php echo $p->idadmin ?>" tabindex="-1" role="dialog" aria-labelledby="updatedataadminLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="updatedataadminLabel" style="color: black;">Update Data Of Officer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <form action="<?php echo base_url(). 'admin/updateadmin'; ?>" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                              <p style="color: black; margin-bottom: -0.3%;"><b>Username</b></p>
                              <input type="hidden" class="form-control" id="idadmin" name="idadmin" value="<?php echo $p->idadmin ?>">
                              <input type="text" class="form-control" id="username" name="username" value="<?php echo $p->username ?>">
                            </div>
                            <div class="form-group">
                              <p style="color: black; margin-bottom: -0.3%;"><b>Name of Admin</b></p>
                              <input type="text" class="form-control" id="namaadmin" name="namaadmin" value="<?php echo $p->namaadmin ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                              <input class="btn btn-success" type="submit" value="Ubah">
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                <?php } ?>


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url('admin/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>

</body>

</html>
