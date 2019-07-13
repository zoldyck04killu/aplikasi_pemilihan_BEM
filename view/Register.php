
  <body class="bg-dark mb-5">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">

          <form action="" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="nama_lengkap" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">Nama Lengkap</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
<select name="jurusan" id="inputJurusan" class="form-control">
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Manajemen Komputer">Manajemen Komputer</option>
  <option value="Komputer Akutansi">Komputer Akutansi</option>
</select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                    <label for="inputEmail">Email address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="nrp" id="inputNrp" class="form-control" placeholder="Nrp" required>
                    <label for="inputNrp">Nrp</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">
                  <div class="form-label-group">
<select name="jekel" id="inputJurusan" class="form-control">
  <option value="cewe">Perempuan</option>
  <option value="cowo">Laki-Laki</option>
</select>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-md btn-primary btn-block" name="register" value="Register">
          </form>

<?php
if (isset($_POST['register'])) {
    $nrp = $obj->conn->real_escape_string($_POST['nrp']);
    $nama = $obj->conn->real_escape_string($_POST['nama_lengkap']);
    $email = $obj->conn->real_escape_string($_POST['email']);
    $jurusan = $obj->conn->real_escape_string($_POST['jurusan']);
    $jekel = $obj->conn->real_escape_string($_POST['jekel']);

    // $password = $obj->conn->real_escape_string($_POST['password']);
    // $password2 = $obj->conn->real_escape_string($_POST['password2']);
    $token = '';
    $role = 0;
    $statusVote = 0;
    $statusPage = 0;
      // if ($password != $password2) {
      //       echo '<script>
      //           alert("password Confirm tidak sesuai");
      //           window.location = "?view=register";
      //           </script>';
      //         die;
      // }
      $password_hash = '';
    $register = $objUser->register($nrp, $nama,$jekel, $email, $jurusan, $password_hash, $token, $role, $statusVote, $statusPage);
    if ($register) {
        echo '<script>window.location="?view=daftar_mhs";</script>';
    }else {
        echo '<script>alert("Error Register");</script>';
    }
        // echo '<script>
        //         window.location="'.base_url().'";
        //     </script>';
}

 ?>

          <div class="text-center">
            <a class="d-block small mt-3" href="Login.php">Login Page</a>
            <a class="d-block small" href="<?= base_url() ?>?view=home">Home</a>
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>



  </body>

</html>
