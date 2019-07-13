
  <body class="bg-dark mb-5">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">

          <form action="" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" name="nrp" id="inputNrp" class="form-control" placeholder="Nrp" required>
                    <label for="inputNrp">Nrp</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-md btn-primary btn-block" name="register" value="Register">
          </form>

<?php
if (isset($_POST['register'])) {
    $nrp = $obj->conn->real_escape_string($_POST['nrp']);

    $register = $objUser->mhs_register($nrp);
    if ($register) {
        echo '<script>window.location="?view=token";</script>';
    }else {
        echo '<script>alert("Error Register");</script>';
    }
        // echo '<script>
        //         window.location="'.base_url().'";
        //     </script>';
}

 ?>

          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="Login.php">Login Page</a>
            <a class="d-block small" href="<?= base_url() ?>?view=home">Home</a>
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> --> 
          <!-- </div> -->
        </div>
      </div>
    </div>



  </body>

</html>
