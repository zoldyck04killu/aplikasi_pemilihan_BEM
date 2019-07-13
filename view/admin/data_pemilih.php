
<h3 class="text-muted">Daftar Pemilih</h3>
<a href="view/laporan/laporan-data-pemilih.php">
  <button type="button" class="btn btn-light">Cetak</button>
</a>
<div class="table-responsive">
<table class="table" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Jekel</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $data = $objBem->showPemilih();
      $i = 1;
      $x = 2;
      while ($a = $data->fetch_object()) {
          ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $a->nrp ?></td>
      <td><?= $a->nama_lengkap ?></td>
      <td><?= $a->jekel ?></td>
      <td><?= $a->jurusan ?></td>
    </tr>
    <?php
      $i++;
      }
    ?>
  </tbody>
</table>
</div>
