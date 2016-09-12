<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>
<?php require 'objetos/validacao.php' ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
	
	
	<script type="text/javascript">
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
      }
    </script>
<body>
	
	<section class="main clearfix">
	
	
	<div class="dropdown pull-right align-login btn-group">
		<a href="index.php"><div class="btn dropdown-toggle" >sair</div></a>
	</div>
	
	
	
<center>
			<form class="container" >
						
						
						
							<ul class="col-lg-12 lista-logado">
								<a href="projeto.php"><li class=" col-lg-6 "><span class="glyphicon glyphicon-new" aria-hidden="true"></span>Novo Projeto</li></a>
								<a href="relatorio.php"><li class=" col-lg-6"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Relatório</li></a>
							</ul>
							
							
							
			</form>
			
			<h1>Nessa área vai alguns gráficos</h1>
			
			<div " id="regions_div" style="width: 80%; height: 60%;"></div>
			
			
						</center>
				
								
						
	</section><!-- end main -->
	
	
</body>
</html>
