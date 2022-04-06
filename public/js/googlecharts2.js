google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Mon', 20, 28, 38, 45],
      ['Tue', 31, 38, 55, 66],
      ['Wed', 50, 55, 77, 80],
      ['Thu', 77, 77, 66, 50],
      ['Fri', 68, 66, 22, 15]
      // Treat first row as data as well.
    ], true);

    var options = {
      legend:'none',
      bar: {groupWidth: '10'},
      candlestick: {risingColor: {fill: '#0ECB81', stroke: '#0ECB81'},
                    hollowisRising: 'true',
                    fallingColor: {fill: '#F6465D', stroke: '#F6465D', colors: '#F6465D'}},
      colors: ['black']
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
