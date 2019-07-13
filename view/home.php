<!-- Icon Cards-->
<div class="row">
  <?php if (@$_SESSION['role'] != 5) {  ?>
  <?php if (@$_SESSION['user']) { ?>
    <?php
                  $statusPage = $objUser->status_vote_page();
                  $dataStatusPage = $statusPage->fetch_object();
                  if ($dataStatusPage->status == 1) {
                      $user = @$_SESSION['user'];
                      $data = $objUser->checkVoteMhs($user);
                      $b = $data->fetch_object();
                      if ($b == null) {
                          ?>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-check"></i>
        </div>
        <div class="mr-5">Vote Calon BEM</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=Vote">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
<?php
                  } ?>
<?php
              } ?>
<?php
} ?>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-user-circle"></i>
        </div>
        <div class="mr-5">Profil Calon</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=calon-bem">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <?php } ?>
  <?php
  if (@$_SESSION['user'] == 'admin') {
      ?>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-people-carry"></i>
        </div>
        <div class="mr-5">Diagram Pendukung Calon</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=like">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-secondary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-list"></i>
        </div>
        <div class="mr-5">Keseluruhan</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=voteKeseluruhan">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-dark o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-chart-pie"></i>
        </div>
        <div class="mr-5">Diagram Pemilihan</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=diagram_pemilihan">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-venus-mars"></i>
        </div>
        <div class="mr-5">Diagram Pemilihan perbandingan dari perempuan/laki-laki</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=diagram_vote_ceweCowo">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-info o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-list"></i>
        </div>
        <div class="mr-5">Data Semua Pemilih</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=data_pemilih">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
<?php
  } ?>
<?php if (@$_SESSION['role'] == 5) { ?>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-user-circle"></i>
        </div>
        <div class="mr-5">Pertanyaan</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="?view=QandA&x=<?= $_SESSION['user'] ?>">
        <span class="float-left">Buka Menu</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

<?php }  ?>
<!--  Profile Calon -->


    <!-- <div class="col col-lg-4">
       <div class="card" style="width: 25rem;">
         <img class="card-img-top" src="assets/image/80e108d772eba7914bb0cf485d7b0c54--one-thousand-fingers.jpg" alt="Card image cap"  style="height: 25rem;">
         <div class="card-body">

           <div id="accordion">
             <div class="card">
               <div class="card-header" id="headingOne">
                 <h5 class="mb-0">
                   <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                     Visi
                   </button>
                 </h5>
               </div>

               <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                 <div class="card-body">
                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header" id="headingTwo">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                     Misi
                   </button>
                 </h5>
               </div>
               <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                 <div class="card-body">
                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                 </div>
               </div>
             </div>
           </div>

         </div>
       </div>
     </div> -->

   </div>
</div>

<?php

$id_calon = '14.04.1071';
$dataCountPemilihan2 = $objBem->diagram_CountPemilihan($id_calon);

$id_calon = '15.04.1069';
$dataCountPemilihan1 = $objBem->diagram_CountPemilihan($id_calon);
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['NO 1',      <?= $dataCountPemilihan1[0] ?>],
          ['NO 2',  <?= $dataCountPemilihan2[0] ?>]
        ]);

        var options = {
          title: 'Diagram Hasil Voting Sementara'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 1500px; height: 500px;"></div>
