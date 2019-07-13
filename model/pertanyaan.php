<?php

class Pertanyaan {

    private $mysqli;

    function __construct($mysqli){
        $this->mysqli = $mysqli;
    }

    public function pertanyaan($user,$question, $x)
    {
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $create = date("Y-m-d");
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO pertanyaan (nrp,pertanyaan,create_at, id_cln_bem) VALUES ('$user','$question','$create', '$x')") or die ($db->error);
        return true;
    }

    public function daftar_pertanyaan($x){
      $db = $this->mysqli->conn;
      $sql = "SELECT *
      FROM pertanyaan
      WHERE id_cln_bem = '$x'";
      $query = $db->query($sql);

      return $query;
    }

    public function check_bertanya($bertanya){
      $db = $this->mysqli->conn;
      $sql = "SELECT *
      FROM calon_bem
      where nrp_calon = $bertanya ";
      $query = $db->query($sql);
      $check_bertanya = @$query->num_rows;
      return $check_bertanya;
    }

} // end class
