<?php

$dataPemilihan = $objBem->diagram_pemilihan();
// var_dump($dataPemilihan);

$id_calon = '14.04.1071';
$dataCountPemilihan2 = $objBem->diagram_CountPemilihan($id_calon);

$id_calon = '15.04.1069';
$dataCountPemilihan1 = $objBem->diagram_CountPemilihan($id_calon);
// echo $dataCountPemilihan1[0];
?>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['', 'Memilih', 'Belum Memilih'],
          ['',  <?= $dataPemilihan[0] ?>,     <?= $dataPemilihan[1] ?>],
        ]);

        var options = {
          title : 'Diagaram Pemilihan',
          vAxis: {title: 'Jumlah'},
          // hAxis: {title: ''},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>

<!-- diagaram lingkaran -->

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Belum Memilih',      <?= $dataPemilihan[1] ?>],
          ['NO 1',      <?= $dataCountPemilihan1[0] ?>],
          ['NO 2',  <?= $dataCountPemilihan2[0] ?>]
        ]);

        var options = {
          title: 'Diagram Hasil Voting'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
