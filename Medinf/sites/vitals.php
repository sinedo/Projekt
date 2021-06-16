<?php
    include '../includes/autoloader.inc.php';
    $v1 = new Vitals();
    $vital = $v1->getVitals($_POST["id"]);
    session_start();
    $p1 = new Patient();
    $patient = $p1->getpatientwithid($_POST["id"]);
    
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Basic dependency-free accordion menu">
  <meta name="author" content="DevMarketer">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="../styles/bulma.css" />
  <link rel="stylesheet" type="text/css" href="../styles/vitalstyles.css">
  <link rel="stylesheet" type="text/css" href="../styles/theme.css">
  <link rel="stylesheet" href="../styles/accordion.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <title>Vitalwerte</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart'], 'language': 'de'});
      google.charts.setOnLoadCallback(drawChart);
    
    
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Datum', 'unterkühlt', 'fieber', 'Temperatur'],
            <?php 
                while ( $x = $vital->fetch()) {
                    echo "['".$x['created_at']."', 35, 37, ".$x['temperature']."],";
                    $height=$x['height'];
                    $weight=$x['weight'];
                }
            ?>
        ]);    
        var options = {
          title: 'Temperaturkurve',
          curveType: 'function',
          legend: { position: 'right' },
          height: 350
        };

        var chart_temperatur = new google.visualization.LineChart(document.getElementById('chart_temperatur'));

        chart_temperatur.draw(data, options);
      }  
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Aufenthaltstag', 'Gewicht'],
          [ 1,      78.8],
          [ 2,      79.5],
          [ 3,     79.6],
          [ 4,      80],
          [ 5,      80.3],
          [ 6,    80.9]
        ]);

        var options = {
          title: 'Gewichtsänderung wärhrend des Aufenthalts im Krankenhaus',
          hAxis: {title: 'Tag', minValue: 0, maxValue: 8},
          vAxis: {title: 'Gewicht', minValue: 30, maxValue: 300},
          legend: 'none'
        };

        var chart_mass = new google.visualization.ScatterChart(document.getElementById('chart_mass'));

        chart_mass.draw(data, options);
      }
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['day', 'Puls'],
          ['19.03',  76],
          ['20.03',  83],
          ['21.03',  75],
          ['22.03',  96]
        ]);

        var options = {
          title: 'Puls (Mittlerwert)',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart_puls = new google.visualization.AreaChart(document.getElementById('chart_puls'));
        chart_puls.draw(data, options);
      }
    </script>




    
  </head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-head">
            <div class="container">                  
                        <div class="columns">
                            <div class="column is-half  ">
                            <div class="box">
                                <div class="columns ">
                                    <div class="column is-one-third">
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Name: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Geschlecht: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Pronomen: </h1>
                                    </div>
                                     <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> <?php echo $patient["name"].' '.$patient["surname"]; ?> </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $patient["sex"]; ?> </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $patient["pronoun"]; ?> </h1>    
                                        </div>                
                                    </div>
                                </div>
                            </div>
                                <div class="column is-half ">
                                <div class="box">
                                <div class="columns">
                                <div class="column is-one-third">
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Alter: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Größe: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Gewicht: </h1>
                                        
                                </div>  
                                <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary">22 </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $height; ?> </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $weight.'kg';  ?> </h1>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>    

                        
            <div class="container has-text-centered">
                <h3 class="title has-text-black">Vitalwerte</h3>
                <hr class="login-hr">
                <p class="subtitle has-text-black">Puls, Gewicht, Blutdruck</p>

                <button class="accordion">Temperatur</button>
                <div class="accordion-content">
                  <div id="chart_temperatur"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>

                    </div>
                  </div>
                  <br>
                </div>
                <button class="accordion">Gewicht</button>
                <div class="accordion-content">
                  <div id="chart_mass"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>
                      </div>
                      </div>
                    </div>
                </div>
                <button class="accordion">Puls</button>
                <div class="accordion-content">
                  <div id="chart_puls"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>
                      </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>                            
                       
    </section>
    <script src="scripts.js"></script>
<body>                 