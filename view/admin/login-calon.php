
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

          <form action="" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nrp" class="form-control" id="formGroupExampleInput" placeholder="User" required="required">
                <label for="formGroupExampleInput">user</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
              <input class="btn btn-md btn-primary btn-block" type="submit" name="login" value="Login">
          </form>

<?php
if (isset($_POST['login'])) {
    $nrp = $obj->conn->real_escape_string($_POST['nrp']);
    $password = $obj->conn->real_escape_string($_POST['password']);
    $login = $objUser->login_calon($nrp, $password);
      if ($login) {
          echo '<script>
          window.location="?view=home";
           </script>';
      }else {
        echo '<script> alert("error login"); </script>';
      }

// nrp 14041037 | pass 1

}

 ?>


          <div class="text-center">

          </div>
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
