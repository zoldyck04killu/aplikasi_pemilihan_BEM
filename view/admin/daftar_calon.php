<h3 class="text-muted">Daftar Calon BEM</h3>
<div class="table-responsive">
<table class="table" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">TGL Lahir</th>
      <th scope="col">IPK</th>
      <th scope="col">TGL Mencalonkan</th>
      <th scope="col">Periode</th>
      <th scope="col">Visi</th>
      <th scope="col">Misi</th>
      <th scope="col">status</th>
      <th scope="col">Config</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $data = $objBem->data_calon();
      $i = 1;
      $x = 2;
      while ($a = $data->fetch_object()) {
          ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="assets/images/<?= $a->img ?>" alt="Card image cap"  style="height: 5rem; width:5rem;"></td>
      <td><?= $a->nrp_calon ?></td>
      <td><?= $a->nama_calon ?></td>
      <td><?= $a->jurusan_calon ?></td>
      <td><?= $a->jekel ?></td>
      <td><?= $a->tgl_lahir ?></td>
      <td><?= $a->ipk_terakhir ?></td>
      <td><?= $a->tgl_mencalonkan ?></td>
      <td><?= $a->periode ?></td>
      <td scope="row"><?= $a->visi ?></td>
      <td><?= $a->misi ?></td>
      <?php
      if ($a->status == 1 ) {
          $status = 'aktif';
      }else {
          $status = 'non aktif';
      }
      ?>
      <td>
          <a href="?view=status_calon&status=<?=$a->status ?>&id=<?= $a->nrp_calon ?>">
              <?= $status ?>
          </a>
      </td>
      <td>
          <a href="?view=rubah_calon&id=<?= $a->nrp_calon ?>">
              Edit
          </a>
          <a href="?view=hapus_calon&id=<?= $a->nrp_calon ?>">
              Hapus
          </a>
      </td>
    </tr>
    <?php
      $i++;
      }
    ?>
  </tbody>
</table>
</div>
