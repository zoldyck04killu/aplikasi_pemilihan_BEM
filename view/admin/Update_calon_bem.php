<?php
$id = $_GET['id'];
$data = $objBem->data_calon_perCalon($id);
$a = $data->fetch_object();
// echo $a->nama_calon;
?>

<form class="" action="" method="post" enctype="multipart/form-data">

  <h3>Calon Ketua BEM</h3>
  <input type="hidden" name="nrp_lama" id="firstName" class="form-control" placeholder="nrp"  value="<?= $a->nrp_calon ?>">

  <div class="form-group">
    <label for="exampleFormControlFile1">Image input</label>
    <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1" multiple value="value="<?= $a->img_pres ?>"">
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nrp" id="firstName" class="form-control" placeholder="nrp"  autofocus="autofocus" value="<?= $a->nrp_calon ?>">
          <label for="firstName">NRP</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nama_calon" id="inputJurusan"  class="form-control" placeholder="Nama Lengkap Calon" value="<?= $a->nama_calon ?>" >
          <label for="inputJurusan">Nama Lengkap Calon Ketua BEM</label>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="jurusan"  autofocus="autofocus" value="<?= $a->jurusan_wakil ?>">
          <label for="jurusan">Jurusan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
            <select class="form-control form-control-lg" name="jekel">
              <option value="<?= $a->jekel ?>"><?= $a->jekel ?></option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="nrp"  autofocus="autofocus" value="<?= $a->tgl_lahir ?>">
          <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="ipk" id="ipk"  class="form-control" placeholder="Nama Lengkap Calon" value="<?= $a->ipk_terakhir ?>" >
          <label for="ipk">IPK Terakhir</label>
        </div>
      </div>
    </div>
  </div>

  <h3>Calon Wakil BEM</h3>


  <div class="form-group">
    <label for="exampleFormControlFile1">Image input</label>
    <input type="file" name="img2" class="form-control-file" id="exampleFormControlFile1" multiple value="<?= $a->img_wakil ?>">
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nrp_wakil" id="firstName2" class="form-control" placeholder="nrp" value="<?= $a->nrp_wakil ?>"  >
          <label for="firstName2">NRP</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nama_wakil" id="inputJurusan2"  class="form-control" placeholder="Nama Lengkap Calon" value="<?= $a->nama_wakil ?>" >
          <label for="inputJurusan2">Nama Lengkap Wakil Calon</label>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="jurusan_wakil" id="jurusan2" class="form-control" placeholder="jurusan"  autofocus="autofocus" value="<?= $a->jurusan_calon ?>">
          <label for="jurusan2">Jurusan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
            <select class="form-control form-control-lg" name="jekel_wakil">
              <option value="<?= $a->jekel_wakil ?>"><?= $a->jekel_wakil ?></option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="date" name="tgl_lahir_wakil" id="tgl_lahir2" class="form-control" placeholder="nrp"  autofocus="autofocus" value="<?= $a->tgl_lahir_wakil ?>">
          <label for="tgl_lahir2">Tanggal Lahir</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="ipk_wakil" id="ipk2"  class="form-control" placeholder="Nama Lengkap Calon" value="<?= $a->ipk_terakhir_wakil ?>" >
          <label for="ipk2">IPK Terakhir</label>
        </div>
      </div>
    </div>
  </div>

<hr style="border: 2px solid;">

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="date" name="tgl_mencalonkan" id="tgl_mencalonkan" class="form-control" placeholder="nrp"  autofocus="autofocus" value="<?= $a->tgl_mencalonkan ?>">
          <label for="tgl_mencalonkan">Tanggal Mencalonkan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="periode" id="periode"  class="form-control" placeholder="Nama Lengkap Calon" value="<?= $a->periode ?>">
          <label for="periode">Periode</label>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Visi</label>
    <textarea name="visi" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?= $a->visi ?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Misi</label>
    <textarea name="misi" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?= $a->misi ?></textarea>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="no_urut" id="no_urut" class="form-control" placeholder="NO Urut" value="<?= $a->no_urut ?>">
          <label for="no_urut">No Urut</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
          <label for="password">Password</label>
        </div>
      </div>
    </div>
  </div>


<input class="btn btn-md btn-info" type="submit" name="insert" value="Simpan">
</form>

<?php
if (isset($_POST['insert'])) {

  $nrp_pres_lama              =  $_POST['nrp_lama'];

    $nrp_pres              =  $_POST['nrp'];
    $nama_pres             = $_POST['nama_calon'];
    $jurusan_pres          = $_POST['jurusan'];
    $jekel_pres            = $_POST['jekel'];
    $tgl_lahir_pres        = $_POST['tgl_lahir'];
    $ipk_pres              = $_POST['ipk'];

    $nrp_wakil              =  $_POST['nrp_wakil'];
    $nama_wakil             = $_POST['nama_wakil'];
    $jurusan_wakil          = $_POST['jurusan_wakil'];
    $jekel_wakil            = $_POST['jekel_wakil'];
    $tgl_lahir_wakil        = $_POST['tgl_lahir_wakil'];
    $ipk_wakil              = $_POST['ipk_wakil'];

    $tgl_mencalonkan  = $_POST['tgl_mencalonkan'];
    $periode          = $_POST['periode'];
    $visi             = $_POST['visi'];
    $misi             = $_POST['misi'];
    $no_urut          = $_POST['no_urut'];
    $password          = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $name_array = $_FILES['img1']['name'];
        $tmp_name = $_FILES['img1']['tmp_name'];

              $format = "Img-".round(microtime(true)) . "";
              $ext = pathinfo($name_array , PATHINFO_EXTENSION);
              if(move_uploaded_file ($tmp_name, "./assets/images/".$name_file = $format. rand(10, 100).".".$ext)){

                $name_array2 = $_FILES['img2']['name'];
                $tmp_name2 = $_FILES['img2']['tmp_name'];

                $format2 = "Img-".round(microtime(true)) . "";
                $ext2 = pathinfo($name_array2 , PATHINFO_EXTENSION);
                move_uploaded_file ($tmp_name2, "./assets/images/".$name_file2 = $format2. rand(10, 100).".".$ext2);

                  // var_dump($name_file);
                  // var_dump($name_file2);
                  // die();
                  $insert_calon =  $objBem->rubah_calon($nrp_pres_lama,$nrp_pres, $nama_pres, $jurusan_pres, $jekel_pres, $tgl_lahir_pres, $ipk_pres, $nrp_wakil, $nama_wakil, $jurusan_wakil, $jekel_wakil, $tgl_lahir_wakil, $ipk_wakil, $tgl_mencalonkan, $periode, $visi, $misi,$name_file,$name_file2, $no_urut,$password_hash);
                    if ($insert_calon) {
                        echo '<script>
                        alert("sukses");
                        window.location="?view=daftar_calon";
                         </script>';
                    }else {
                      echo '<script> alert("error message"); </script>';
                    }
              }
            }


// }
