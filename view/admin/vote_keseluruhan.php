
<h3 class="text-muted">Data Pemilihan</h3>
<a href="view/laporan/laporan-vote-keseluruhan.php">
  <button type="button" class="btn btn-light">Cetak</button>
</a>
<div class="table-responsive">
<table class="table" class="table">
  <thead>
    <tr>
      <th scope="col">No Urut</th>
      <th scope="col">Foto Calon Ketua</th>
      <th scope="col">Nama Calon Ketua</th>
      <th scope="col">Foto Calon Wakil</th>
      <th scope="col">Nama Calon Wakil</th>
      <th scope="col">Jumlah Vote</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $data = $objBem->data_calon_aktif();
      $i = 1;
      $x = 2;
      while ($a = $data->fetch_object()) {
          ?>
    <tr>
      <th scope="row"><?= $a->no_urut ?></th>
      <td><img src="assets/images/<?= $a->img_pres ?>" alt="Card image cap"  style="height: 50px; width:50px;"></td>
      <td><?= $a->nama_calon ?></td>
      <td><img src="assets/images/<?= $a->img_wakil ?>" alt="Card image cap"  style="height: 50px; width:50px;"></td>
      <td><?= $a->nama_wakil ?></td>
      <td>
        <?php
        $id_calon = $a->nrp_calon;
        $dataCountPemilihan = $objBem->diagram_CountPemilihan($id_calon);
        echo  $dataCountPemilihan[0];
        ?>
      </td>
      </tr>
    <?php
      $i++;
      }
    ?>
  </tbody>
</table>
</div>
