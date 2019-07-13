
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

          <form action="" method="POST">

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="kode" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Kode Login</label>
              </div>
            </div>
            <div class="form-group">
            </div>
              <input class="btn btn-md btn-primary btn-block" type="submit" name="login" value="Login">
          </form>

<?php
if (isset($_POST['login'])) {
    $kode = $obj->conn->real_escape_string($_POST['kode']);
    $login = $objUser->loginKode($kode);
      if ($login) {
          echo '<script>
          window.location="?view=home";
           </script>';
      }else {
        echo '<script> alert("error login, gunakan kode login anda"); </script>';
      }

// nrp 14041037 | pass 1

}

 ?>


          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="?view=register">Register an Account</a>
            <a class="d-block small" href="<?= base_url() ?>?view=home">Home</a> -->
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->

          <!-- </div> -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
