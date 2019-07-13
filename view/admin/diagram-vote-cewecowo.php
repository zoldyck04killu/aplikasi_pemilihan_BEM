<?php

$jekelVote = $objBem->diagram_vote_ceweCowo();
$cowo = 0;
$cewe = 0;
while($a = $jekelVote->fetch_object()){
  if ($a->jekel == 'cowo') {
    $cowo += 1;
  }elseif ($a->jekel == 'cewe') {
    $cewe += 1;
  }
}
// echo $cowo . ' '.$cewe;
?>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['', 'Cewe', 'Cowo'],
          ['',  <?= $cewe ?>,     <?= $cowo ?>],
        ]);

        var options = {
          title : 'Diagram Antara Pemilih Cowo Dan Cewe',
          vAxis: {title: 'Banyak Vote'},
          hAxis: {title: 'Jenis Kelamin'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>
