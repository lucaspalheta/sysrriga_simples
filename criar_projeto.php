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
	
		
		
	<form class="container form-horizontal  form-border" id="formArea"  method="post" action="scripts_php/calcular_projeto.php"> 
	<h1>Projeto</h1>
	<center>
		<h4>Bem vindo a área de desenvolvimento de projeto, escolha as opções abaixo para criar seu projeto de irrigação personalizado.</h4>
	</center>
	
		<!--Escolha do Técnico-->
		<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
			<label class="control-label color_black">Técnico</label><select name="tecnico" class="form-control">
			<?php
				/*Abrir banco de dados*/
				include "IFPA_sysrriga_20160010019982000.inc";
					
				/*Busca e impressão*/
				$result_tecnico = mysql_query("SELECT nome FROM tecnico");
				while ($row = mysql_fetch_array($result_tecnico, MYSQL_NUM)) {
				$identificacao= $row[0];
				?>				
				<?php echo "<option value='".$identificacao."'>" .$identificacao."</option>";?>
			<?php
			}
			mysql_free_result($result);
			?>
			</select>
		</div>
		<!--Escolha do Produtor-->
		<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
			<label class="control-label color_black">Produtor</label><select name="produtor" class="form-control">
			<?php
				/*Abrir banco de dados*/
				include "IFPA_sysrriga_20160010019982000.inc";
					
				/*Busca e impressão*/
				$result_produtor = mysql_query("SELECT nome FROM produtor");
				while ($row = mysql_fetch_array($result_produtor, MYSQL_NUM)) {
				$identificacao= $row[0];
				?>				
				<?php echo "<option value='".$identificacao."'>" .$identificacao."</option>";?>
			<?php
			}
			mysql_free_result($result);
			?>
			</select>
		</div>
		<!--Escolha da propriedade-->
		<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
			<label class="control-label color_black">Propriedade</label><select name="propriedade" class="form-control">
			<?php
				/*Abrir banco de dados*/
				include "IFPA_sysrriga_20160010019982000.inc";
					
				/*Busca e impressão*/
				$result_prop = mysql_query("SELECT nome FROM propriedade");
				while ($row = mysql_fetch_array($result_prop, MYSQL_NUM)) {
				$prop_nome= $row[0];
				?>				
				<?php echo "<option value='".$prop_nome."'>" .$prop_nome."</option>";?>
			<?php
			}
			mysql_free_result($result);
			?>
			</select>
		</div>	
		<!--Escolha da área-->
		<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
			<label class="control-label color_black">Área</label><select name="area" class="form-control">
			<?php
				/*Abrir banco de dados*/
				include "IFPA_sysrriga_20160010019982000.inc";
					
				/*Busca e impressão*/
				$result_area = mysql_query("SELECT identificacao FROM area");
				while ($row = mysql_fetch_array($result_area, MYSQL_NUM)) {
				$identificacao= $row[0];
				?>				
				<?php echo "<option value='".$identificacao."'>" .$identificacao."</option>";?>
			<?php
			}
			mysql_free_result($result);
			?>
			</select>
		</div>
		<!--Escolha do Aspersor-->
		<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
			<label class="control-label color_black">Aspersor</label><select name="aspersor" class="form-control">
			<?php
				/*Abrir banco de dados*/
				include "IFPA_sysrriga_20160010019982000.inc";
					
				/*Busca e impressão*/
				$result_aspersor = mysql_query("SELECT modelo FROM aspersor");
				while ($row = mysql_fetch_array($result_aspersor, MYSQL_NUM)) {
				$identificacao= $row[0];
				?>				
				<?php echo "<option value='".$identificacao."'>" .$identificacao."</option>";?>
			<?php
			}
			mysql_free_result($result);
			?>
			</select>
		</div>
		
		<center class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao"><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
	</form>	
	</div>
					
						
	</section><!-- end main -->
	
	
</body>
</html>
