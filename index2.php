<?php
      session_start();
  
  include "valida_cookies.inc";
  
if((!isset ($_SESSION['nome_usuario']) == true) and (!isset ($_SESSION['senha_usuario']) == true))
{
	unset($_SESSION['nome_usuario']);
	unset($_SESSION['senha_usuario']);

	header('location:index.php');
	}

$logado = $_SESSION['nome_usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sysrriga</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/iframe.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="jquery-2.1.4.min.js"></script>
	<!--google-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
	<script>
		$(function(){
    $(".btn-toggle").click(function(e){
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});
	</script>
	

	
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
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.php"><img src="img/logo_branco_total.png" title="Magnetic" alt="Magnetic"/></a>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="index.php" class="selected">Inicial</a></li>
				<li><a href="contact.html">Fale Conosco</a></li>
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			<ul class="social clearfix">
				<li><a href="https://www.facebook.com/AmoBrinquedoDeMiriti/?fref=ts" class="fb" data-title="Facebook"></a></li>
				<li><a href="#" class="google" data-title="Google +"></a></li>
				<li><a href="#" class="behance" data-title="Behance"></a></li>
				<!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
				<li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
				<li><a href="#" class="rss" data-title="RSS"></a></li>
			</ul><!-- end social -->

			<div class="rights">
				<p>Copyright © 2014 magnetic.</p>
				<p>Template by <a href="">Pixelhint.com</a></p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->
	
	
	
			
			
			
	<section class="main clearfix">
	
	
	<div class="dropdown pull-right align-login btn-group">
		<a href="index.php"><div class="btn dropdown-toggle" >sair</div></a>
	</div>
	
	
	
		<div class="container">

		<center class="col-md-12"><img src="img/mapa_sysrriga.png" usemap="#map"></center>
		<map name="map">
			
			<area shape="poly" coords="146,102,270,103,269,346,148,357," href="cadastros/cadastrar_tecnico.php#formulario_tecnico" target="janela"/>
		</map>
			

				<iframe src="cadastros/inicial.php" class="iframe_div" name="janela"></iframe>
							
								
						
	</section><!-- end main -->
	
	
</body>
</html>
