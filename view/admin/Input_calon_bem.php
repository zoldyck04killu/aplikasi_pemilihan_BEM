
<form class="" action="" method="post" enctype="multipart/form-data">

  <h3>Calon Ketua BEM</h3>

  <!-- <input type="hidden" name="jenis_calon[]" value="1"> -->

  <div class="form-group">
    <label for="exampleFormControlFile1">Image input</label>
    <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nrp" id="firstName" class="form-control" placeholder="nrp"  autofocus="autofocus">
          <label for="firstName">NRP</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nama_calon" id="inputJurusan"  class="form-control" placeholder="Nama Lengkap Calon" >
          <label for="inputJurusan">Nama Lengkap Calon Ketua BEM</label>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="jurusan"  autofocus="autofocus">
          <label for="jurusan">Jurusan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
            <select class="form-control form-control-lg" name="jekel">
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
          <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="nrp"  autofocus="autofocus">
          <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="ipk" id="ipk"  class="form-control" placeholder="Nama Lengkap Calon" >
          <label for="ipk">IPK Terakhir</label>
        </div>
      </div>
    </div>
  </div>

  <h3>Calon Wakil BEM</h3>

  <!-- <input type="hidden" name="jenis_calon[]" value="2"> -->


  <div class="form-group">
    <label for="exampleFormControlFile1">Image input</label>
    <input type="file" name="img2" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>

  <!-- <div class="row">
    <div class="col">
      <input type="text" name="nama_calon" class="form-control" placeholder="Nama Lengkap Calon" required>
    </div>
  </div> -->

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nrp_wakil" id="firstName2" class="form-control" placeholder="nrp"  >
          <label for="firstName2">NRP</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="nama_wakil" id="inputJurusan2"  class="form-control" placeholder="Nama Lengkap Calon" >
          <label for="inputJurusan2">Nama Lengkap Wakil Calon</label>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="jurusan_wakil" id="jurusan2" class="form-control" placeholder="jurusan"  autofocus="autofocus">
          <label for="jurusan2">Jurusan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
            <select class="form-control form-control-lg" name="jekel_wakil">
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
          <input type="date" name="tgl_lahir_wakil" id="tgl_lahir2" class="form-control" placeholder="nrp"  autofocus="autofocus">
          <label for="tgl_lahir2">Tanggal Lahir</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="ipk_wakil" id="ipk2"  class="form-control" placeholder="Nama Lengkap Calon" >
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
          <input type="date" name="tgl_mencalonkan" id="tgl_mencalonkan" class="form-control" placeholder="nrp"  autofocus="autofocus">
          <label for="tgl_mencalonkan">Tanggal Mencalonkan</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="periode" id="periode"  class="form-control" placeholder="Nama Lengkap Calon" >
          <label for="periode">Periode</label>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Visi</label>
    <textarea name="visi" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Misi</label>
    <textarea name="misi" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="text" name="no_urut" id="no_urut" class="form-control" placeholder="NO Urut" >
          <label for="no_urut">No Urut</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-label-group">
          <input type="password" name="password" id="password" class="form-control" placeholder="NO Urut" >
          <label for="password">Password</label>
        </div>
      </div>
    </div>
  </div>


<input class="btn btn-md btn-info" type="submit" name="insert" value="Simpan">
</form>

<?php
if (isset($_POST['insert'])) {
    // $jenis_calon  =  $_POST['jenis_calon'];
    // jenis_calon adalah nentukan yang nanti nya ketika didatabase apakah dia wakil atau ketua
    // jika dia 1 adalah ketua
    // jika 2 adalah wakil

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
                    $insert_calon =  $objBem->daftar_calon($nrp_pres, $nama_pres, $jurusan_pres, $jekel_pres, $tgl_lahir_pres, $ipk_pres, $nrp_wakil, $nama_wakil, $jurusan_wakil, $jekel_wakil, $tgl_lahir_wakil, $ipk_wakil, $tgl_mencalonkan, $periode, $visi, $misi,$name_file,$name_file2, $no_urut,$password_hash);
                  if ($insert_calon) {
                      echo '<script>
                      alert("sukses");
                      window.location="?view=input_calon_bem";
                       </script>';
                  }else {
                    echo '<script> alert("error message"); </script>';
                  }
              }

        // $format = explode(".", $_FILES['img']['name']);
        // $img = "Img-".round(microtime(true)).".".end($format);
        // $sumber = $_FILES['img']['tmp_name'];
        // $upload = move_uploaded_file($sumber, "./assets/images/".$img);


        // $format2 = explode(".", $_FILES['img_wakil']['name']);
        // $img2 = "Img-".round(microtime(true)).".".end($format2);
        // $sumber2 = $_FILES['img']['tmp_name'];

        // if ($upload) {
        //   # code...
        //   $upload2 = move_uploaded_file($sumber2, "./assets/images/".$img2);
        //   var_dump($upload2);
        //   die;
        // }




}
