<?php
$user = $_SESSION['user'];
$data = $objUser->checkVoteMhs($user);
$b = $data->fetch_object();
if ($b != null) {
  echo '<script>
  window.location="?view=home";
   </script>';
}elseif ($b == null) {
?>
<div class="container-fluid">

  <div class="container">
    <div class="row justify-content-md-center">

      <?php
      $i = 1;
      $data = $objBem->data_calon();
      while ($b = $data->fetch_object()) {
      ?>


      <div class="col col-lg-6">
        <div style="width: 30rem; position:inline; text-align:center;">
          <?php if (@$_SESSION['user']){ ?>

          <a href="?view=QandA&x=<?= $b->nrp_calon ?>">
            <button type="button" class="btn btn-info btn-lg btn-block">Berikan Pertanyaan</button>
          </a>
          <?php } ?>
          <h2>No Urut <?= $b->no_urut ?></h2>
          <img src="assets/images/<?= $b->img_pres ?>" alt="Card image cap"  style="height: 25rem; width:10rem;loat:left;">
          <img src="assets/images/<?= $b->img_wakil ?>" alt="Card image cap"  style="height: 25rem; width:10rem;loat:left;">
          <div class="card-body">
            <h5 class="card-title"><?= strtoupper($calon = $b->nama_calon) ?> & <?= strtoupper($calon = $b->nama_wakil) ?>  </h5>
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?= $i ?>" aria-expanded="false" aria-controls="collapseOne">
                      Visi
                    </button>
                  </h5>
                </div>

                <div id="collapseOne<?= $i ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <?php
                    // if ($a->jenis_calon == 1) {
                     echo  $b->visi;
                    // }
                    ?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo<?= $i ?>" aria-expanded="false" aria-controls="collapseTwo">
                      Misi
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo<?= $i ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <?php
                     echo  $b->misi;
                    ?>
                  </div>
                </div>
              </div>
            </div>
  <form class="" action="" method="post">
    <input type="hidden" name="nrp_calon" value="<?= $b->nrp_calon; ?>">
    <input type="hidden" name="periode" value="<?= $b->periode; ?>">
    <input type="submit" class="btn btn-sm btn-primary btn-block" name="vote" value="Vote">
  </form>

          </div>
        </div>
      </div>

<?php
  $i++;

  }
?>

     </div>
  </div>
</div>

<?php if (isset($_POST['vote'])) {
          $nrp_mhs = @$_SESSION['user'];
          $nrp_calon = $_POST['nrp_calon'];
          $periode = $_POST['periode'];
          // var_dump($_POST['vote']);
          // die();
          $create = date("Y-m-d H:i:s");
          $objBem->vote($nrp_mhs, $nrp_calon, $create, $periode);
          // perubahan status
                $mhs = @$_SESSION['user'];
                $statusVote = 1;
                $objUser->changeStatus( $mhs, $statusVote);
                echo '<script>
                alert("Berhasil Vote, Silahkan Login kembali");
                window.location="?view=logout";
                 </script>';

}
}
?>
