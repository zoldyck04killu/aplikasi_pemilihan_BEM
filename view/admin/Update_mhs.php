<?php
$id = $_GET['id'];
$data = $objUser->data_mhs_perMhs($id);
$a = $data->fetch_object();
// echo $a->nama_calon;
?>
  <body class="bg-dark mb-5">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update an Account</div>
        <div class="card-body">

          <form action="" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="nama_lengkap" id="firstName" class="form-control" placeholder="First name" required="required" value="<?= $a->nama_lengkap ?>">
                    <label for="firstName">Nama Lengkap</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
<select name="jurusan" id="inputJurusan" class="form-control">
  <option value="<?= $a->jurusan ?>"><?= $a->jurusan ?></option>
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
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" value="<?= $a->email ?>">
                    <label for="inputEmail">Email address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="nrp" id="inputNrp" class="form-control" placeholder="Nrp" required value="<?= $a->nrp ?>">
                    <label for="inputNrp">Nrp</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="nrp_lama" id="inputNrp" class="form-control" placeholder="Nrp_lama" required value="<?= $a->nrp ?>">

            <input type="submit" class="btn btn-md btn-primary btn-block" name="update" value="Update">
          </form>

<?php
if (isset($_POST['update'])) {
    $nrp = $obj->conn->real_escape_string($_POST['nrp']);
    $nrp_lama = $obj->conn->real_escape_string($_POST['nrp_lama']);

    $nama = $obj->conn->real_escape_string($_POST['nama_lengkap']);
    $email = $obj->conn->real_escape_string($_POST['email']);
    $jurusan = $obj->conn->real_escape_string($_POST['jurusan']);
    $token = md5(rand(1, 50));
    $role = 0;
    $statusVote = 0;
    $statusPage = 0;

    $register = $objUser->updateMhs($nrp_lama,$nrp, $nama, $email, $jurusan, $token, $role, $statusVote, $statusPage);
    if ($register) {
        echo '<script>window.location="?view=daftar_mhs";</script>';
    }else {
        echo '<script>alert("Error Update");</script>';
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
