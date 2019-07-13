<?php

class CalonBem {

  private $mysqli;

  function __construct ($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function daftar_calon($nrp_pres, $nama_pres, $jurusan_pres, $jekel_pres, $tgl_lahir_pres, $ipk_pres, $nrp_wakil, $nama_wakil, $jurusan_wakil, $jekel_wakil, $tgl_lahir_wakil, $ipk_wakil, $tgl_mencalonkan, $periode, $visi, $misi,
  $name_file,$name_file2,$no_urut,$password_hash)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO calon_bem
      (nrp_calon,nrp_wakil,nama_wakil,nama_calon,jurusan_calon,jurusan_wakil,jekel,jekel_wakil,tgl_lahir,tgl_lahir_wakil,ipk_terakhir,ipk_terakhir_wakil,tgl_mencalonkan,periode,visi,misi,img_pres,img_wakil,no_urut,password)
      VALUES
      ( '$nrp_pres', '$nrp_wakil', '$nama_wakil', '$nama_pres', '$jurusan_pres', '$jurusan_wakil', '$jekel_pres', '$jekel_wakil', '$tgl_lahir_pres', '$tgl_lahir_wakil', '$ipk_pres', '$ipk_wakil', '$tgl_mencalonkan', '$periode', '$visi', '$misi',
        '$name_file','$name_file2', '$no_urut','$password_hash')") or die ($db->error);
      return true;
  }

  public function rubah_calon($nrp_pres_lama,$nrp_pres, $nama_pres, $jurusan_pres, $jekel_pres, $tgl_lahir_pres, $ipk_pres, $nrp_wakil, $nama_wakil, $jurusan_wakil, $jekel_wakil, $tgl_lahir_wakil, $ipk_wakil, $tgl_mencalonkan, $periode, $visi, $misi,
  $name_file,$name_file2,$no_urut,$password_hash)
  {
    $db = $this->mysqli->conn;
    $rubahCalon = $db->query("UPDATE calon_bem SET
        nrp_calon='$nrp_pres',nrp_wakil='$nrp_wakil',nama_wakil='$nama_wakil',nama_calon='$nama_pres',jurusan_calon='$jurusan_pres',
        jurusan_wakil='$jurusan_wakil',jekel='$jekel_pres',jekel_wakil='$jekel_wakil',tgl_lahir='$tgl_lahir_pres',tgl_lahir_wakil='$tgl_lahir_wakil',ipk_terakhir='$ipk_pres',ipk_terakhir_wakil='$ipk_wakil',tgl_mencalonkan='$tgl_mencalonkan',periode='$periode',
        visi='$visi',misi='$misi',img_pres='$name_file',img_wakil='$name_file2',no_urut='$no_urut', password='$password_hash'
      WHERE nrp_calon = '$nrp_pres_lama' ") or die ($db->error);
      if ($rubahCalon)
      {
        return true;
      }else{
        return false;
      }
  }

  public function data_calon()
  {
    $db = $this->mysqli->conn;
    // die($img);
    $sql = "SELECT * FROM calon_bem";
    $query = $db->query($sql);
    return $query;
  }

  public function data_calon_aktif()
  {
    $db = $this->mysqli->conn;
    // die($img);
    $sql = "SELECT * FROM calon_bem where status=1";
    $query = $db->query($sql);
    return $query;
  }


  public function showPemilih()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT mahasiswa.nrp,mahasiswa.nama_lengkap,mahasiswa.jekel,mahasiswa.jurusan FROM vote INNER JOIN mahasiswa ON vote.nrp = mahasiswa.nrp ") or die ($db->error);
    return $query;
  }

  public function data_calon_perCalon($id)
  {
    $db = $this->mysqli->conn;
    // die($img);
    $sql = "SELECT * FROM calon_bem where nrp_calon='$id'";
    $query = $db->query($sql);
    return $query;
  }

  public function data_calon_baru($i)
  {
    $db = $this->mysqli->conn;
    // die($img);
    $sql = "SELECT * FROM calon_bem where status='1'  ";
    $query = $db->query($sql);
    return $query;
  }

  public function data_calon_baru_perNoUrut($no_urut)
  {
    $db = $this->mysqli->conn;
    // die($img);
    $sql = "SELECT * FROM calon_bem where no_urut='$no_urut'";
    $query = $db->query($sql);
    return $query;
  }

  public function vote($nrp_mhs, $nrp_calon, $create, $periode)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO vote (nrp,vote_calon,create_at,periode) VALUES ( '$nrp_mhs', '$nrp_calon', '$create','$periode' )") or die ($db->error);
  }

  // public function like($nrp, $like, $create)
  // {
  //   $db = $this->mysqli->conn;
  //   $db->query("INSERT INTO like_calon VALUES ('', '$nrp', '$like', '$create')") or die ($db->error);
  // }

  public function countlike($calon)
  {

    $db = $this->mysqli->conn;
    $count = $db->query("SELECT * FROM like_calon WHERE like_calon = '$calon' ") or die ($db->error);
    $a = $count->num_rows;
    return $a;
  }

  public function diagram_vote_ceweCowo()
  {
    $db = $this->mysqli->conn;
    $data = $db->query("SELECT mahasiswa.jekel FROM vote INNER JOIN mahasiswa ON vote.nrp = mahasiswa.nrp ") or die ($db->error);
    return $data;
  }

  public function diagram_pemilihan()
  {
    $db = $this->mysqli->conn;
    $dataMilih = $db->query("SELECT count(nrp) FROM mahasiswa WHERE statusVote=1 and role=0 ") or die ($db->error);
    $a = $dataMilih->fetch_array();
    // $sumPemilih = count($a);
    //
    $dataTidakMilih = $db->query("SELECT count(nrp) FROM mahasiswa WHERE statusVote=0 and role = 0 ") or die ($db->error);
    $b = $dataTidakMilih->fetch_array();
    // $sumTidakPemilih = count($b);
    // var_dump($a[0]);
    // var_dump($b[0]);

    return [$a[0],$b[0]];
  }

  public function diagram_Pendukung()
  {
    $db = $this->mysqli->conn;
    $dataPendukung = $db->query("SELECT jml_like FROM calon_bem ") or die ($db->error);
    return $dataPendukung;
  }

  public function diagram_CountPemilihan($id_calon)
  {
    $db = $this->mysqli->conn;
    $dataMilih = $db->query("SELECT count(nrp) FROM vote WHERE vote_calon='$id_calon'  ") or die ($db->error);
    $a = $dataMilih->fetch_array();

    return [$a[0]];
  }

  public function updateLike($nrp_mhs,$nrp_calon,$create,$periode)
  {
      $db = $this->mysqli->conn;
      $db->query("INSERT INTO like_calon (nrp,like_calon,create_at,periode) VALUES ('$nrp_mhs','$nrp_calon','$create','$periode')") or die ($db->error);
      $cek = $db->query("SELECT * FROM calon_bem WHERE nrp_calon = '$nrp_calon'");
      $count = $cek->fetch_object();
      $a = $count->jml_like;
      $jml = 1 + $a;
      $db->query("UPDATE calon_bem SET jml_like = '$jml' WHERE nrp_calon = '$nrp_calon'");
      return true;
  }

  public function status_calon($status,$nrp)
  {
      $db = $this->mysqli->conn;
      $cek = $db->query("SELECT status FROM calon_bem WHERE nrp_calon = '$nrp'");
      $status_calon = $cek->fetch_object();
      // var_dump($status_calon);
      if ($status_calon->status == 1) {
          $status_calon = 0;
      }elseif ($status_calon->status == 0) {
          $status_calon = 1;
     }
      $db->query("UPDATE calon_bem SET status='$status_calon' WHERE nrp_calon = '$nrp'");
  }

  public function hapusCalonBem($id)
  {
    $db = $this->mysqli->conn;
    $db->query("DELETE FROM calon_bem WHERE nrp_calon = '$id' ") or die ($db->error);
    // return $query;
  }

} // end class
