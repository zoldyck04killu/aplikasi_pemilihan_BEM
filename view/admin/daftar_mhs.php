<h3 class="text-muted">Daftar Mahasiswa aktif</h3>
<div class="table-responsive">
<table class="table" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Token login</th>
      <th scope="col">Status Vote</th>
      <th scope="col">Config</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $data = $objUser->showMhs();
      $i = 1;
      $x = 2;
      while ($a = $data->fetch_object()) {
          ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $a->nrp ?></td>
      <td><?= $a->nama_lengkap ?></td>
      <td><?= $a->email ?></td>
      <td><?= $a->jurusan ?></td>
      <td><?= $a->token ?></td>
      <td>
        <?php
        if ($a->statusVote == 1 ) {
        ?>
          <a href="?view=status_calon&status=<?=$a->statusVote ?>&id=<?= $a->nrp ?>">
            <?=$status = 'Sudah Vote';?>
          </a>
        <?php
        }else {
          ?>
            <a href="?view=status_calon&status=<?=$a->statusVote ?>&id=<?= $a->nrp ?>">
              <?=$status = 'Belum Vote';?>
            </a>
          <?php
        }
        ?>
      </td>
      <td>
      </td>
      <td>
          <a href="?view=rubah_mhs&id=<?= $a->nrp ?>">
              Edit
          </a>
          <a href="?view=hapus_mhs&id=<?= $a->nrp ?>">
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
