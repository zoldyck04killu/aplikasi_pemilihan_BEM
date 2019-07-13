<?php

class User {

    private $mysqli;

    function __construct($mysqli){
        $this->mysqli = $mysqli;
    }

    public function register($nrp, $nama,$jekel, $email, $jurusan, $password_hash, $token, $role, $statusVote, $statusPage)
    {
      $db = $this->mysqli->conn;
      $userdata =  $db->query("SELECT * FROM mahasiswa WHERE nrp = '$nrp' ") or die ($db->error);
      $cekUser = $userdata->num_rows;
        if ($cekUser > 0) {
            echo "Anda sudah terdaftar";
            die;
        }
        $db->query("INSERT INTO mahasiswa VALUES ('$nrp', '$nama','$jekel', '$email', '$jurusan', '$password_hash', '$token', '$role', '$statusVote', '$statusPage')") or die ($db->error);
        // $userdata = $db->query("SELECT * FROM mahasiswa WHERE nrp = '$nrp' ") or die ($db->error);
        // $cekPass = $userdata->fetch_object();
        //     $_SESSION['user'] = $cekPass->nrp;
        //     $_SESSION['nama'] = $cekPass->nama_lengkap;
        //     $_SESSION['role'] = $cekPass->role;
        //     $_SESSION['token'] = $cekPass->token;
        //     $_SESSION['status'] = $cekPass->statusVote;
        //     $_SESSION['page'] = $cekPass->statusPage;
            return true;
    }

    public function mhs_register($nrp)
    {
      $token = md5(rand(1, 50));
      $db = $this->mysqli->conn;
      $userdata =  $db->query("SELECT * FROM mahasiswa WHERE nrp = '$nrp' ") or die ($db->error);
      $cekUser = $userdata->num_rows;
      $data = $userdata->fetch_object();
        if ($cekUser <= 0) {
              echo "Nrp anda tidak terdaftar";
              die;
        }elseif ($data->token != null) {
            echo "Anda sudah register ulang";
            die;
        }else{

        $db->query("UPDATE mahasiswa SET token = '$token' WHERE nrp = '$nrp' ");
        $userdata = $db->query("SELECT * FROM mahasiswa WHERE nrp = '$nrp' ") or die ($db->error);
        $cekPass = $userdata->fetch_object();
            $_SESSION['user'] = $cekPass->nrp;
            $_SESSION['nama'] = $cekPass->nama_lengkap;
            $_SESSION['role'] = $cekPass->role;
            $_SESSION['token'] = $cekPass->token;
            $_SESSION['status'] = $cekPass->statusVote;
            $_SESSION['page'] = $cekPass->statusPage;
            return true;
          }
    }

    public function login($nrp, $password)
    {
      $db = $this->mysqli->conn;
      $userdata = $db->query("SELECT * FROM mahasiswa WHERE nrp = '$nrp' ") or die ($db->error);
      $cekUser = $userdata->num_rows;
      $cekPass = $userdata->fetch_object();
          if ($cekUser == 1) {
              if (password_verify($password, $cekPass->password)) {
                  // buat session
                  $_SESSION['user'] = $cekPass->nrp;
                  $_SESSION['role'] = $cekPass->role;
                  $_SESSION['status'] = $cekPass->statusVote;
                  $_SESSION['page'] = $cekPass->statusPage;

                  return true;
              }else {
                // password salah
                return false;
              }

          }
          else {
            // user tidak terdaftar
            return false;
          }
    }

    public function login_calon($nrp, $password)
    {
      $db = $this->mysqli->conn;
      $userdata = $db->query("SELECT * FROM calon_bem WHERE nrp_calon = '$nrp' ") or die ($db->error);
      $cekUser = $userdata->num_rows;
      $cekPass = $userdata->fetch_object();
          if ($cekUser == 1) {
              if (password_verify($password, $cekPass->password)) {
                  // buat session
                  $_SESSION['user'] = $cekPass->nrp_calon;
                  $_SESSION['role'] = $cekPass->rule;

                  return true;
              }else {
                // password salah
                return false;
              }

          }
          else {
            // user tidak terdaftar
            return false;
          }
    }

    public function loginKode($kode)
    {
      $db = $this->mysqli->conn;
      $cek = $db->query("SELECT * FROM mahasiswa WHERE token = '$kode' ") or die ($db->error);
      $ceklogin = $cek->fetch_array();
      $token1 = $ceklogin['token'];

      $userdata = $db->query("SELECT * FROM mahasiswa WHERE token = '$kode' ") or die ($db->error);
      $cekUser = $userdata->num_rows;
      $cekPass = $userdata->fetch_object();
      if ($token1 == $kode) {
        $_SESSION['user'] = $cekPass->nrp;
        $_SESSION['role'] = $cekPass->role;
        $_SESSION['status'] = $cekPass->statusVote;
        $_SESSION['page'] = $cekPass->statusPage;
        return true;
      }
      else {
        return false;
      }
    }

    public function logout(){
      @$_SESSION['user'] == FALSE;
      unset($_SESSION);
      session_destroy();
    }

    public function changeStatus($mhs, $statusVote)
    {
      $db = $this->mysqli->conn;
      $db->query("UPDATE mahasiswa SET statusVote = '$statusVote' WHERE nrp = '$mhs' ");
    }

    public function changePage($changePage)
    {
      $db = $this->mysqli->conn;
      $db->query("UPDATE status_vote_page SET status = '$changePage' ") or die ($db->error);
    }

    public function checkPage()
    {
      $db = $this->mysqli->conn;
      $query = $db->query("SELECT statusPage FROM mahasiswa WHERE nrp='admin' ") or die ($db->error);
      return $query;
    }

    public function showPage()
    {
      $db = $this->mysqli->conn;
      $query = $db->query("SELECT * FROM mahasiswa WHERE statusPage ")or die ($db->error);
      return $query;
    }

    public function showMhs()
    {
      $db = $this->mysqli->conn;
      $query = $db->query("SELECT * FROM mahasiswa where role=0 ")or die ($db->error);
      return $query;
    }

    public function checkVoteMhs($user)
    {
      $db = $this->mysqli->conn;
      $query = $db->query("SELECT * FROM vote where nrp='$user' ")or die ($db->error);
      return $query;
    }

    public function checkLikeMhs($user)
    {
      $db = $this->mysqli->conn;
      $query = $db->query("SELECT * FROM like_calon where nrp='$user' ")or die ($db->error);
      return $query;
    }

    public function hapusMhs($id)
    {
      $db = $this->mysqli->conn;
      $db->query("DELETE FROM mahasiswa WHERE nrp = '$id' ") or die ($db->error);
      // return $query;
    }

    public function data_mhs_perMhs($id)
    {
      $db = $this->mysqli->conn;
      // die($img);
      $sql = "SELECT * FROM mahasiswa where nrp='$id'";
      $query = $db->query($sql);
      return $query;
    }

    public function updateMhs($nrp_lama,$nrp, $nama, $email, $jurusan, $token, $role, $statusVote, $statusPage)
    {
      $db = $this->mysqli->conn;
      // var_dump($nrp_lama.' '.$nrp.' '.$nama.' '.$email.' '.$jurusan.' '.$token.' '.$role.' '.$statusVote.' '.$statusPage);
      // die();
      $updateMhs = $db->query("UPDATE mahasiswa SET
        nrp='$nrp',nama_lengkap='$nama',email='$email',jurusan='$jurusan',token='$token',role='$role',statusVote='$statusVote',statusPage='$statusPage'
        WHERE nrp = '$nrp_lama' ") or die ($db->error);
        if ($updateMhs)
        {
          return true;
        }else{
          return false;
        }
    }

    public function status_vote_page()
    {
      $db = $this->mysqli->conn;
      $sql = "SELECT * FROM status_vote_page";
      $query = $db->query($sql);
      return $query;
    }

} // end class
