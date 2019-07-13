<h3 class="text-muted">Aktifasi Halaman Vote</h3>
<div class="btn-group">
<form class="" action="" method="post">
  <input class="btn btn-sm btn-info" type="submit" name="on" value="Active">
  <input type="hidden" name="1" value="1">
</form>

<?php
if (isset($_POST['on'])) {
    $changePage = $_POST['1'];
    $objUser->changePage($changePage);
}
 ?>

 <form class="" action="" method="post">
   <input class="btn btn-sm btn-danger" type="submit" name="off" value="Deactive">
   <input type="hidden" name="0" value="0">
 </form>

 <?php
 if (isset($_POST['off'])) {
     $changePage = $_POST['0'];
     $objUser->changePage($changePage);
 }
  ?>
</div>

<h4>status Halaman : <?php
$data = $objUser->status_vote_page();
$a = $data->fetch_object();

  if ($a->status == 1) {
        echo "Active";
  }
  else {
      echo "Deactive";
  }
?> </h4>
