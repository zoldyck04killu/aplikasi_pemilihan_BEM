<?php
require_once '../../config/autoload.php';
require_once '../../config/config.php';
require_once '../../config/connection.php';
include('../../model/calon_bem.php');

$obj = new Connection($host, $user, $pass, $db);
$objBem = new CalonBem ($obj);

ob_start();
define('K_PATH_IMAGES', '../../assets/image/');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, True, 'UTF-8', false);

// document information
// $pdf->SetCreator('Kwitansi Penjualan');
// $pdf->SetTitle('Kwitansi Penjualan');
// $pdf->SetSubject('Kwitansi Penjualan');

// header & footer data
$pdf->SetHeaderData('LOGOSTMIKINDONESIABANJARMASIN.png', 20, 'BEM STMIK INDONESIA BANJARMASIN',
            "Alamat : Jl. Pangeran Hidayatullah (Banua Hanyar) Banjarmasin \nTelp. (0511) 4315530 - 4315531", array(48,89,112), array(48,89,112));

// $pdf->SetHeaderData('logo.png', 30, 'BIDAN PRAKTEK MANDIRI (BPM)', PDF_HEADER_STRING);
$pdf->SetFooterData( array(0, 0, 0), array(0, 0, 0));
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margin
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 20, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set page break
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set scaling image
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// font subsetting
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 14, '', true);

$pdf->AddPage();

$html=<<<EOD
    <center> <h1> Laporan Keseluruhan Pemilihan </h1> </center>
    <table border="1">
      <tr align="center" style="font-weight: bold;">
          <th width="50">No</th>
          <th>No Urut</th>
          <th>Foto Calon Ketua</th>
          <th>Nama Calon Ketua</th>
          <th>Foto Calon Wakil</th>
          <th>Nama Calon Wakil</th>
          <th>Jumlah Vote</th>
      </tr>
    </table>
EOD;

// <img src="../../assets/images/Img-155718177717.png" alt="Card image cap"  style="height: 50px; width:50px;">
$html2=<<<EOD
  <table border="1" cellpadding="4">
      <tr>
        <td width="50" height="100">
EOD;
$html5=<<<EOD
        </td>
      </tr>
    </table>
EOD;
$pdf->SetX(10);
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);

$no = 1;
      $data = $objBem->data_calon_aktif();
      while ($a = $data->fetch_object()) {
        $id_calon = $a->nrp_calon;
        $dataCountPemilihan = $objBem->diagram_CountPemilihan($id_calon);
        $img_pres = "../../assets/images/".$a->img_pres;
        $img_wakil = "../../assets/images/".$a->img_wakil;

      $pdf->SetX(10);
      $pdf->writeHTMLCell(0, 0, '', '', $html2.''.
            $no.'</td>
            <td>'.$a->no_urut.'</td>
            <td>'.$pdf->Image($img_pres, 70, 75 + $x, 20, 20, '', '', '', false, 9).'</td>
            <td>'.$a->nama_calon.'</td>
            <td>'.$pdf->Image($img_wakil, 150, 75 + $x, 20, 20, '', '', '', false, 9).'</td>
            <td>'.$a->nama_wakil.'</td>
            <td>'.$dataCountPemilihan[0].'
            '.$html5 , 0, 1, 0, true, '', true);
            $x = $x + 30;
            $y = $y + 30;
    $no++;
  }
      // $pdfimage = "assets/barcode/".$k;
      // $pdfimgname = $k;
      // $pdf->Image($pdfimage, 30, 25 + $x, 0, 0, '', '', '', false, 9);
      //
      // $pdf->SetXY(70, 30 + $y);
      // $pdf->writeHTML($pdfimgname,100 , 30, 0, 0, '', '', '', false, 9);
      // $x = $x + 30;
      // $y = $y + 30;


ob_end_clean();
$pdf->Output('keseluruhan.pdf', 'I');
