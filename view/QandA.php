<div class="container-fluid">

      <nav id="navbar-example2" class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">Halaman Pertanyaan</a>
              <!-- <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#fat">@fat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mdo">@mdo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#one">one</a>
                  <a class="dropdown-item" href="#two">two</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#three">three</a>
                </div>
              </li>
          </ul> -->
      </nav>
      <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" style="overflow: auto; height: 400px;">
<?php
$data = $objPertanyaan->daftar_pertanyaan($_GET['x']);
while ($a = $data->fetch_object()) {
?>

<?php
$check_bertanya = $objPertanyaan->check_bertanya($a->nrp);
if ($check_bertanya > 0) {
  echo '<h4 id="fat" style="color:#07cfc9">Calon Bem</h4>';
}else {
  echo '<h4 id="fat" style="color:#07cfc9">'. $a->nrp.'</h4>';
}
?>

          <p>
            <?= $a->pertanyaan; ?>
          </p>
<?php } ?>
      </div>
      <form class="" action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="far fa-comment-alt"></i>
              </span>
          </div>
          <?php if (@$_SESSION['user']){ ?>
            <input type="text" name="question" class="form-control" placeholder="Pesan" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn btn-outline-secondary" name="tanya" type="submit">Kirim</button>
          <?php }else{ ?>
            <input type="text" name="question" class="form-control" placeholder="Pesan" aria-label="Username" aria-describedby="basic-addon1" disabled>
            <button class="btn btn-outline-secondary" name="tanya" type="submit" disabled>Kirim</button>
          <div class="input-group-append">
          <?php } ?>
          </div>
        </div>
      </form>

</div>

<?php
if (isset($_POST['tanya'])) {
  $user = $_SESSION['user'];
  $x = $_GET['x'];
  $question = $obj->conn->real_escape_string($_POST['question']);
  $tanya = $objPertanyaan->pertanyaan($user,$question, $x);
  if ($tanya) {
      echo '<script>
      alert("sukses");
      window.location="?view=QandA&x='.$x.'";
       </script>';
  }else {
    echo '<script> alert("error message"); </script>';
  }

}

?>
