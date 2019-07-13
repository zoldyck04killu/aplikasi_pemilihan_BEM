<div class="container">
  <div class="row justify-content-md-center">
    <?php
        $i = 1;
        $x = 1;
        $data = $objBem->data_calon_baru($i);
        while ($a = $data->fetch_object()) {
            // $data2 = $objBem->data_calon_baru_perNoUrut($i);
      // while ($b = $data2->fetch_object()) { ?>

    <div class="col col-lg-6">
      <div style="width: 30rem; position:inline; text-align:center;">
        <?php if (@$_SESSION['user']) {
          ?>

        <a href="?view=QandA&x=<?= $a->nrp_calon ?>">
          <button type="button" class="btn btn-info btn-lg btn-block">Berikan Pertanyaan</button>
        </a>
        <?php
      } ?>
        <h2>No Urut <?= $a->no_urut ?></h2>
        <img src="assets/images/<?= $a->img_pres ?>" alt="Card image cap"  style="height: 25rem; width:10rem;loat:left;">
        <img src="assets/images/<?= $a->img_wakil ?>" alt="Card image cap"  style="height: 25rem; width:10rem;loat:left;">
        <div class="card-body">
          <h5 class="card-title"><?= strtoupper($calon = $a->nama_calon) ?> & <?= strtoupper($calon = $a->nama_wakil) ?>  </h5>
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
                   echo  $a->visi;
            // } ?>
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
                   echo  $a->misi; ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          $user = $_SESSION['user'];
            $dataLike = $objUser->checkLikeMhs($user);
            $b = $dataLike->fetch_object();
            if ($b == null) {
                ?>
            <form class="" action="" method="post">
              <input type="hidden" name="nrp_calon" value="<?= $a->nrp_calon; ?>">
              <input type="hidden" name="periode" value="<?= $a->periode; ?>">
              <input type="submit" class="btn btn-sm btn-primary btn-block" name="like" value="Like">
            </form>
          <?php
            } ?>
        </div>
      </div>
    </div>

  <?php
      // }
      $i++;
        }
    
  ?>

<?php if (isset($_POST['like'])) {
      $nrp_mhs = @$_SESSION['user'];
      $nrp_calon = $_POST['nrp_calon'];
      $periode = $_POST['periode'];

      $like = 1;
      $create = date("Y-m-d H:i:s");
      $like = $objBem->updateLike($nrp_mhs, $nrp_calon, $create, $periode);
      if ($like) {
          echo '<script>
      window.location="?view=home";
       </script>';
      }
  } ?>
