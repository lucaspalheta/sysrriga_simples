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
			
			<area shape="poly" coords="724,29,1033,34,1034,263,724,248," href="cadastros/cadastrar_area.php#formArea" target="janela"/>
			<area shape="poly" coords="11,18,100,11,104,74,13,93," href="cadastros/cadastrar_aspersor.php#formAspersor" target="janela"/>
			<area shape="poly" coords="435,39,600,30,600,379,439,378," href="cadastros/cadastrar_cultura.php#formCultura" target="janela"/>
			<area shape="poly" coords="219,90,384,90,391,331,215,331," href="cadastros/cadastrar_tecnico.php#formProdutor" target="janela"/>
			<area shape="poly" coords="146,102,270,103,269,346,148,357," href="cadastros/cadastrar_produtor.php#formTecnico" target="janela"/>
			<area shape="poly" coords="435,39,1107,30,1124,379,439,378," href="cadastros/cadastrar_propriedade.php#formPropriedade" target="janela"/>
			
		</map>
			

				<iframe src="cadastros/inicial.php" class="iframe_div" name="janela"></iframe>
							
								
		<center><a href="criar_projeto.php"><h3>Criar Projeto</h3></a></center>				
	</section><!-- end main -->
	
	
</body>
</html>
