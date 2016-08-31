google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'x');
        data.addColumn('number', 'values');
        data.addColumn({id:'i0', type:'number', role:'interval'});
        data.addColumn({id:'i1', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
  
        data.addRows([
            [1, 65, 90, 80, 70, 60, 50, 40],
            [2, 65, 90, 80, 70, 60, 50, 40],
            [3, 65, 90, 80, 70, 60, 50, 40],
            [4, 65, 90, 80, 70, 60, 50, 40],
            [5, 65, 90, 80, 70, 60, 50, 40],
            [6, 65, 90, 80, 70, 60, 50, 40],
            [7, 65, 90, 80, 70, 60, 50, 40],
            [8, 65, 90, 80, 70, 60, 50, 40]]);
  
        // The intervals data as narrow lines (useful for showing raw source data)
         var options_points = {
        title:'Esquema do Projeto',
        curveType:'function',
        lineWidth: 6,
		pointSize: 6,
        series: [{'color': '#D3362D'}],
        intervals: { 'style':'points', pointSize: 5 },
        legend: 'none',
    };
  
        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_lines'));
        chart_lines.draw(data, options_points);
      };

/*map*/
	  
	 google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      };
	
	