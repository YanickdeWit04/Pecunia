google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Amount in euro'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);
        var data2 = google.visualization.arrayToDataTable([
          ['Category', 'Amount in euro'],
          ['Work',     2],
          ['Eat',      11],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Uitgaven per categorie',
          pieHole: 0.4,
          legend: 'none',
        };
        var options2 = {
          title: 'niks',
          pieHole: 0.4,
          legend: {position: 'right'}
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data2, options2);
      }
