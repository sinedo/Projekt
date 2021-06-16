<?php
    include '../includes/autoloader.inc.php';
    $v1 = new Vitals();
    $vital = $v1->getVitals($_POST["id"]);
    
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart'], 'language': 'de'});
      google.charts.setOnLoadCallback(drawChart);
    
    
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Datum', 'unterkühlt', 'fieber', 'Temperatur'],
            <?php 
                while ( $x = $vital->fetch() ) {
                    echo "['".$x['created_at']."', 35, 37, ".$x['temperature']."],";
                }
            ?>
        ]);    
        var options = {
          title: 'Temperaturkurve',
          curveType: 'function',
          legend: { position: 'right' },
          width: 1820,
          height: 350


        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));

        chart.draw(data, options);
      }  
    </script>
  </head>
  <body>
    <div id="chart" style="height: 400px"></div>
  </body>
</html>