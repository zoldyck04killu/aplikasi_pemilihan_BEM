<?php
require_once 'config/config.php';
require_once 'config/connection.php';
include('model/user.php');
include('model/pertanyaan.php');
include('model/calon_bem.php');

$obj = new Connection ($host, $user, $pass, $db);
$objUser = new User ($obj);

$obj = new Connection ($host, $user, $pass, $db);
$objUser = new User ($obj);
$objBem = new CalonBem ($obj);
$objPertanyaan = new Pertanyaan ($obj);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemilihan BEM</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Bootstrap core CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- <link href="assets/css/button.css" rel="stylesheet"> -->

    <!-- font fontawesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> -->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  </head>
  <body>
    <body id="page-top">

      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <img src="assets/image/logo kpu bem.jpeg" alt="" width="50" height="50" style="margin-right:15px; "><a class="navbar-brand mr-1" href="index.html">BEM STMIK INDONESIA BANJARMASIN</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->


        <!-- Navbar -->


      </nav>

      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="?view=home">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span>
            </a>
          </li>
<!--
              <li class="nav-item">
                <a class="nav-link" href="?view=QandA">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Q&A</span></a>
              </li> -->
          <?php if (@$_SESSION['user']){ ?>
            <?php
            $statusPage = $objUser->status_vote_page();
            $dataStatusPage = $statusPage->fetch_object();
              if ($dataStatusPage->status == 1) {
                if ($_SESSION['role'] != 5) {
                ?>
              <li class="nav-item">
                <a class="nav-link" href="?view=Vote">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Vote</span></a>
              </li>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
              <span><?php if (@$_SESSION['user'] == '') {
                echo "Login";
              } echo @$_SESSION['user']; ?></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Login Screens:</h6>
              <?php if (!@$_SESSION['user']){ ?>
                <a class="dropdown-item" href="?view=login">LogIn</a>
                <a class="dropdown-item" href="?view=login-calon">LogIn Calon Bem</a>
                <a class="dropdown-item" href="?view=admin">LogIn Admin</a>

              <?php }else{ ?>
                <a class="dropdown-item" href="?view=logout">LogOut</a>
              <?php } ?>
              <?php
              $user = @$_SESSION['user'];
              if (!$user) {?>
                <a class="dropdown-item" href="?view=mhs-register">Register</a>
              <?php } ?>
              <?php if ( @$_SESSION['role'] == 1) {?>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Options</h6>
                <a class="dropdown-item" href="?view=input_calon_bem">Input Calon BEM</a>
                <a class="dropdown-item" href="?view=daftar_calon">Daftar Calon BEM</a>
                <a class="dropdown-item" href="?view=register">Input Mahasiswa</a>
                <a class="dropdown-item" href="?view=daftar_mhs">Daftar mahasiswa</a>

                <a class="dropdown-item" href="?view=option-page">Page Options</a>
                <a class="dropdown-item" href="?view=tidakadahalaman">404 Page</a>
              <?php } ?>
            </div>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="?view=home">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Overview</li>
            </ol>


            <?php include('page/page.php'); ?>


          <!-- /.container-fluid -->

          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © KPUM STMIK INDO 2019</span>
              </div>
            </div>
          </footer>

        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

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
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Page level plugin JavaScript-->
      <script src="assets/vendor/chart.js/Chart.min.js"></script>
      <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
      <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="assets/js/sb-admin.min.js"></script>

      <!-- Demo scripts for this page-->
      <script src="assets/js/demo/datatables-demo.js"></script>
      <script src="assets/js/demo/chart-area-demo.js"></script>


      <?php
          $sql = $objBem->data_calon();
          $sql2 = $objBem->data_calon();
          $sql3 = $objBem->data_calon();
      ?>

      <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',        //bisa menggunakan tampilan bar, pie, line, radar
      data: {
          labels: [<?php while($b = $sql->fetch_object()) { echo ' " No Urut ' . $b->no_urut . '",'; } ?>], //keterangan nama-nama label
          datasets: [{
              label: 'Data Diagram', //Judul Grafif
              data: [<?php while($a = $sql2->fetch_object()) { echo $a->jml_like . ', '; } ?>], //Data Grafik
              backgroundColor: [
                  'red',  //Warna Background
                  'green', //Warna Background

              ],
              borderColor: [
               'rgba(255,99,132,1)', //Warna Garis Data Grafik
           ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
  </script>

  </body>
</html>
