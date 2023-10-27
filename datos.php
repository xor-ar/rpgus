<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['IUPFA', 5],
          ['UTN', 1],
          ['UM', 1],
          ['UNLZ', 1],
        ]);

        // Set chart options
        var options = {'title':'Universidad'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      
      function drawChart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Lic. en Seguridad', 7],
          ['Lic. en Tecnología Aplicada a la Seguridad', 1],
        ]);

        // Set chart options
        var options = {'title':'Carrera'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart1_div'));
        chart.draw(data, options);
      }
      
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Año', 'Cantidad'],
          ['2011',2],
          ['2013',1],
          ['2014',1],
          ['2019',2],
          ['2018',1],
          ['2017',1],
        ]);

        var options = {
          title: 'Año de graduación'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
    <div id="chart1_div"></div>
    <div id="piechart"></div>
  </body>
</html>