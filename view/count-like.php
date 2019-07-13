<?php

$dataPendukung = $objBem->diagram_Pendukung();

?>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['', 'No Urut 1', 'No Urut 2'],
          ['',<?php while($a = $dataPendukung->fetch_object()) { echo $a->jml_like.','; } ?>],
        ]);

        var options = {
          title : 'Diagram Pendukung yang menyukai pasangan calon',
          vAxis: {title: 'Banyak Like'},
          hAxis: {title: 'No Urut'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>
