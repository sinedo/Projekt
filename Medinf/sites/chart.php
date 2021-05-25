<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/bulma.min.css" />
    <link rel="stylesheet" href="../styles/vitalstyles.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart'], 'language': 'de'});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Datum', 'unterkühlt', 'fieber', 'Temperatur'],
          ['1',35,39,36],
          ['2',35,39,37],
          ['3',35,39,38],
          ['4',35,39,39],
          ['5',35,39,40],
          ['6',35,39,41],
          ['7',35,39,38],
          ['8',35,39,35],
          ['9',35,39,34]
        ]);

        var options = {
          title: 'Temperaturkurve',
          curveType: 'function',
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>
    

    
</head>
<body>
    <div class="dropdown is-fullwidth" id="dropdown">
        <div class="dropdown-trigger">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Vitalwert 1</span>
                <span class="icon is-small">
                    <img src="../img/Down-Carrot-512.jpg">
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
                <div class="dropdown-item">
                  <div>
                    <div id="chart" style="height: 400px"></div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis dicta voluptates ullam aspernatur nemo nisi esse? Et, odit excepturi sequi totam, velit suscipit modi vel iste esse qui doloribus atque.</p>
                </div>
                <div class="dropdown-item">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis dicta voluptates ullam aspernatur nemo nisi esse? Et, odit excepturi sequi totam, velit suscipit modi vel iste esse qui doloribus atque.</p>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            var dropdown = document.querySelector('.dropdown');

            dropdown.classList.toggle('is-active');
            var height = document.getElementById('dropdown-menu').offsetHeight+135;
            dropdown.classList.toggle('is-active');

            dropdown.addEventListener('click', function(event) {
                
                event.stopPropagation();
                dropdown.classList.toggle('is-active');
                if(height>0){
                    document.getElementById("content").style.top = height+"px";
                }else{
                    document.getElementById("content").style.top = 100+"px";
                }
                height=-height;
                resizeChart();
            });
            });        
        </script>
    </div>
    <div class="content" id="content">  
        <p id="hi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quo error porro, illo iure magni quidem nesciunt beatae in sequi.</p>
        
    </div>

</body>
</html>