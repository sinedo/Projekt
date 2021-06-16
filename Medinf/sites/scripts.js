var accordions = document.getElementsByClassName("accordion");

for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');

    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      // accordion is currently open, so close it
      content.style.maxHeight = null;
    } else {
      // accordion is currently closed, so open it
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }
}

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
    legend: { position: 'right' },
    width: '94%',
    height: 350


  };

  var chart = new google.visualization.LineChart(document.getElementById('chart'));

  chart.draw(data, options);
}

