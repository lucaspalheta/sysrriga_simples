<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>
<?php require 'objetos/validacao.php' ?>

<link rel="stylesheet" type="text/css" href="css/iframe.css">

<body>
	<section class="main clearfix">
	
	
	<div class="dropdown pull-right align-login btn-group">
		<a href="index.php"><div class="btn dropdown-toggle" >sair</div></a>
	</div>
	
	
	
		<div class="container">
	
		<center class="col-md-12"><img src="img/mapa_sysrriga.png" usemap="#map"></center>
		
		<map name="map" >
			
			<area shape="poly" coords="617,277,830,395,823,397,610,280," href="cadastros/cadastrar_tubulacao.php#formTubulacao" target="janela"/>
			<area shape="poly" coords="634,398,541,339,484,301,421,253,376,213,354,193,434,186,504,181,575,178,647,177,710,177,760,179,822,182,875,188,945,196,994,203,1060,216,1114,228,1140,235,1103,242,1067,252,1035,264,995,283,962,300,919,328,893,347,858,373,829,399,633,397," href="cadastros/cadastrar_area.php#formArea" target="janela"/>
			<area shape="poly" coords="11,18,100,11,104,74,13,93," href="cadastros/cadastrar_aspersor.php#formAspersor" target="janela"/>
			<area shape="poly" coords="435,39,600,30,600,379,439,378," href="cadastros/cadastrar_cultura.php#formCultura" target="janela"/>
			<area shape="poly" coords="219,90,384,90,391,331,215,331," href="cadastros/cadastrar_tecnico.php#formProdutor" target="janela"/>
			<area shape="poly" coords="146,102,270,103,269,346,148,357," href="cadastros/cadastrar_produtor.php#formTecnico" target="janela"/>
			<area shape="poly" coords="435,39,1107,30,1124,379,439,378," href="cadastros/cadastrar_propriedade.php#formPropriedade" target="janela"/>
			
		</map>
			

				<iframe src="cadastros/inicial.php" class="iframe_div" name="janela"></iframe>
							
								
		<center btn><a class="" href="criar_projeto.php"><h3>Criar Projeto</h3></a></center>				
	</section><!-- end main -->
	
	
</body>
</html>
