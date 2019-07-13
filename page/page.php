<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'view/home.php';
}

elseif (@$_GET['view'] == 'QandA')
{
    include 'view/QandA.php';
}

elseif (@$_GET['view'] == 'Vote')
{
    include 'view/Vote.php';
}

elseif (@$_GET['view'] == 'login')
{
    include 'view/Login.php';
}
elseif (@$_GET['view'] == 'logout') {
    $objUser->logout();
    echo '<script>
    window.location="?view=login";
     </script>';
}
elseif (@$_GET['view'] == 'register')
{
    include 'view/Register.php';
}
elseif (@$_GET['view'] == 'mhs-register')
{
    include 'view/mhs-register.php';
}
elseif (@$_GET['view'] == 'daftar_mhs') {
    include 'view/admin/daftar_mhs.php';
}
elseif (@$_GET['view'] == 'input_calon_bem')
{
    include 'view/admin/Input_calon_bem.php';
}
elseif (@$_GET['view'] == 'option-page') {
    include 'view/admin/option-page.php';
}
elseif (@$_GET['view'] == 'calon-bem') {
    include 'view/calon.php';
}elseif (@$_GET['view'] == 'token') {
    include 'view/token.php';
}elseif (@$_GET['view'] == 'admin') {
    include 'view/admin/login.php';
}elseif (@$_GET['view'] == 'login-calon') {
    include 'view/admin/login-calon.php';
}elseif (@$_GET['view'] == 'like') {
    include 'view/count-like.php';
}
elseif (@$_GET['view'] == 'diagram_vote_ceweCowo') {
    include 'view/admin/diagram-vote-cewecowo.php';
}
elseif (@$_GET['view'] == 'daftar_calon') {
    include 'view/admin/daftar_calon.php';
}
elseif (@$_GET['view'] == 'status_calon') {
    $status = $_GET['status'];
    $nrp = $_GET['id'];

    $data = $objBem->status_calon($status,$nrp);
    echo '<script>
    window.location="?view=daftar_calon";
     </script>';
}elseif (@$_GET['view'] == 'rubah_calon')
{
include 'view/admin/Update_calon_bem.php';
}
elseif (@$_GET['view'] == 'rubah_mhs')
{
include 'view/admin/Update_mhs.php';
}
elseif (@$_GET['view'] == 'hapus_calon')
{
    $id = $_GET['id'];
    $objBem->hapusCalonBem($id);
    echo '<script>
    swal({
        title: "Alert",
        text: "Data berhasil dihapus",
        type: "success"
    }).then(function() {
        window.location = "?view=daftar_calon";
    });
  </script>';
}
elseif (@$_GET['view'] == 'hapus_mhs')
{
    $id = $_GET['id'];
    $objUser->hapusMhs($id);
      echo '<script>
      swal({
        title: "Alert",
        text: "Data berhasil dihapus",
        type: "success"
      }).then(function() {
        window.location = "?view=daftar_mhs";
      });
      </script>';
}
elseif (@$_GET['view'] == 'data_pemilih') {
    include 'view/admin/data_pemilih.php';
}
elseif (@$_GET['view'] == 'diagram_pemilihan') {
    include 'view/admin/diagram-pemilihan.php';
}
elseif (@$_GET['view'] == 'voteKeseluruhan') {
    include 'view/admin/vote_keseluruhan.php';
}

else
{
  include 'view/404.php';

}
