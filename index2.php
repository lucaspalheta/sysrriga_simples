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
			<a href="index.php"><img src="img/logo.png" title="Magnetic" alt="Magnetic"/></a>
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

		<center><img src="img/sistema_irrigacao.jpg" usemap="#map"></center>
		<map name="map">
			<area shape="rect" coords="328,500,715,650" href="cadastros/cadastrar_tecnico.php#formulario_propriedade" target="janela"/>
		</map>
			

				<iframe src="cadastros/cadastrar_tecnico.php" class="iframe_div" name="janela"></iframe>
					<div>
					
			<form class="container form-horizontal  form-border "  id="formulario_total" role="form" method="post" action="formulario.php" >
                     <!--Tabela de dados do projeto-->
					 <div class="menu_4">							
							<ul class="menu_4_left_nav">

						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='proj_nome' id="proj_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Técnico Responsável</label><input type="text" class="form-control" name='proj_Tecnico_Responsavel' id="proj_Tecnico_Responsavel" placeholder='Técnico Responsável *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nº CREA</label><input type="text" class="form-control" name='proj_CREA' id="proj_CREA" placeholder='Nº CREA *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Proprietário</label><input type="text" class="form-control" name='proj_Proprietario' id="proj_Proprietario" placeholder='Proprietário *'>
							</div>
						</fieldset>

							</ul>
							
					 </div>	

					 <!--Tabela de dados da propriedade-->
					 <div class="menu_3">
					     <div class="menu_1-box">

						      <span class="menu_3_left"><h3><big> Dados da Propriedade 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_3_left" ).click(function(){
											$("ul.menu_3_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	
                           
							<ul class="menu_3_left_nav">
						<fieldset>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='prop_nome' id="prop_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Endereço</label><input type="text" class="form-control" name='prop_endereco' id="prop_endereco" placeholder='Endereço *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">CEP</label><input type="number" class="form-control" name='prop_cep' id="prop_cep" placeholder='CEP *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Cidade</label><input type="text" class="form-control" name='prop_cidade' id="prop_cidade" placeholder='Cidade *'>
							</div>
						</fieldset>
							</ul>
					 </div> 
				
                    <!--Tabela de dados gerais-->					 

                    <div class="menu_5">
					     <div class="menu_5-box">
						      <span class="menu_5_left"><h3><big> Dados Gerais 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  </big><img src="images/dwn.png" alt=""/> </h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_5_left" ).click(function(){
											$("ul.menu_5_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_5_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Evapotranspiração de Referência (ETo)</label><input type="number" class="form-control " name='evapotranspiracao_de_referencia' id="evapotranspiracao_de_referencia" placeholder='Evapotranspiração de Referência (ETo) *'/>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Disponibilidade Total de Água (DTA)</label><input type="number" class="form-control " name='disponibilidade_total_de_agua' id="disponibilidade_total_de_agua" placeholder='Disponibilidade Total de Água (DTA) *'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Eficiência de Aplicação (EA)</label><input type="number" class="form-control " name='eficiencia_de_aplicacao' id="eficiencia_de_aplicacao" placeholder='Eficiência de Aplicação (EA) *'>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Horas de Funcionamento</label><input type="number" class="form-control " name='horas_de_funcionamento' id="horas_de_funcionamento" placeholder='Horas de Funcionamento *'>
							</div>-->
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Turno de Rega (TR)</label><input type="number" class="form-control " name='turno_de_rega' id="turno_de_rega" placeholder='Turno de Rega (TR) *'>
								se o turno de rega for de 4,4 dias adota-se 4 e ajusta-se a IRN para os 4 dias
							</div>-->
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Dias de Folga</label><input type="number" class="form-control " name='dias_de_folga' id="dias_de_folga" placeholder='Dias de Folga *'>
							</div>-->
						</fieldset>
							</ul>
					 </div>	

					 <!--Tabela de dados da àrea-->
                    <div class="menu_6">
					     <div class="menu_6-box">
						      <span class="menu_6_left"><h3><big> Dados da Área 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_6_left" ).click(function(){
											$("ul.menu_6_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_6_left_nav">

						<fieldset>

							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Largura</label><input type="number" class="form-control " name='Largura' placeholder='Largura' id="Largura" />
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento</label><input type="number" class="form-control" name='Comprimento' placeholder='Comprimento *' id="Comprimento" onblur="areaRemover essa parte do código para funcionar()"/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha Principal</label><input type="number" class="form-control " name='DN_da_Linha_Principal' placeholder='DN da Linha Principal *' id="DN_da_Linha_Principal" />
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha Lateral</label><input type="number" class="form-control " name='DN_da_Linha_Lateral' id="dn_da_linha_lateral" placeholder='DN da Linha Lateral *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento da Linha de Recalque</label><input type="number" class="form-control " name='Comprimento_da_Linha_de_Recalque' placeholder='Comprimento da Linha de Recalque *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento da Linha de Sucção</label><input type="number" class="form-control " name='Comprimento_da_Linha_de_Succao' placeholder='Comprimento da Linha de Sucção *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha de Recalque</label><input type="number" class="form-control " name='DN_da_Linha_de_Recalque' placeholder='DN da Linha de Recalque *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha de Sucção</label><input type="number" class="form-control " name='DN_da_Linha_de_Succao' placeholder='DN da Linha de Sucção *'>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Tempo de Funcionamento</label><input type="number" class="form-control " name='Tempo_de_Funcionamento' placeholder='Tempo de Funcionamento *'>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Número Total de Setores</label><input type="number" class="form-control " name='Numero_Total_de_Setores' placeholder='Número Total de Setores *'>
							</div>
						</fieldset>
							</ul>
					 </div>			

                      <!--Tabela de dados da cultura-->
                    <div class="menu_7">
					     <div class="menu_7-box">
						      <span class="menu_7_left"><h3><big> Dados da Cultura 
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_7_left" ).click(function(){
											$("ul.menu_7_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_7_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome da Cultura</label><input type="text" class="form-control " name='Nome_da_Cultura' placeholder='Nome da Cultura'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Data de Plantio</label><input type="date" class="form-control  " name='Data_de_Plantio' placeholder='Data de Plantio'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre Plantas</label><input type="number" class="form-control " name='Espacamento_entre_Plantas' placeholder='Espaçamento entre Plantas *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre Fileiras</label><input type="number" class="form-control " name='Espacamento_entre_Fileiras' placeholder='Espaçamento entre Fileiras *'/>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Área Sombreda</label><input type="number" class="form-control " name='Area_Sombreada' placeholder='Área Sombreda *'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Profundidade Efetiva do Sistema Radicular (Z)</label><input type="number" class="form-control " name='Profundidade_Efetiva_Sistema_Radicular' placeholder='Profundidade Efetiva do Sistema Radicular (Z) *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Fator de Disponibilidade (f)</label><input type="number" class="form-control " name='Fator_de_Disponibilidade' id="Fator_de_Disponibilidade" placeholder='Fator de Disponibilidade (f) *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Coeficiente de Cultivo (Kc)</label><input type="number" class="form-control " name='Coeficiente_de_Cultivo' id="Coeficiente_de_Cultivo" placeholder='Coeficiente de Cultivo (Kc) *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Evapotranspiração da Cultura (ETc)</label><input type="number" class="form-control " name='Evapotranspiracao_da_Cultura' placeholder='Evapotranspiração da Cultura (ETc) *'>
							</div>
						</fieldset>
							</ul>
					 </div>	

                    <!--Tabela de dados do solo-->
                    <div class="menu_8">
					     <div class="menu_8-box">
						      <span class="menu_8_left"><h3><big> Dados do Solo 
							   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_8_left" ).click(function(){
											$("ul.menu_8_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_8_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade de Campo (CC)</label><input type="number" class="form-control  " name='capacidade_de_campo' id="capacidade_de_campo" placeholder='Capacidade de Campo (CC)'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Ponto de Murchamento (PM)</label><input type="number" class="form-control " name='ponto_de_murchamento' id="ponto_de_murchamento" placeholder='Ponto de Murchamento (PM)'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Densidade-do-Solo (ds)</label><input type="number" class="form-control " name='densidade_do_solo' id="densidade_do_solo" placeholder='Densidade-do-Solo (ds)' onblur="irnremover esse pedaço para que o código funcione)()" >
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Irrigacao Real Necessária (IRN)</label><input type="number" class="form-control " name='irrigacao_real_necessaria' id="irrigacao_real_necessaria" placeholder='Irrigacao Real Necessária (IRN)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Irrigacao Total Necessária (ITN)</label><input type="number" class="form-control " name='irrigaca_total_necessaria' id="irrigaca_total_necessaria" placeholder='Irrigacao Total Necessária (ITN)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade Real de Água no Solo (CRA)</label><input type="number" class="form-control " name='capacidade_real_de_agua_no_solo' id="capacidade_real_de_agua_no_solo" placeholder='Capacidade Real de Água no Solo (CRA)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade Total de Água no Solo (CTA)</label><input type="number" class="form-control " name='capacidade_total_de_agua_no_solo' id="capacidade_total_de_agua_no_solo" placeholder='Capacidade Total de Água no Solo (CTA)'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Velocidade de Infiltração Básica (Vib)</label><input type="number" class="form-control " name='velocidade_de_infiltracao_basica' id="velocidade_de_infiltracao_basica" placeholder='Velocidade de Infiltração Básica (Vib)'/>
							</div>
						</fieldset>

							</ul>
					 </div>						 
				   </div>
				   <br><br>
				  
					<center><button type="submit" id="cadastro_btn" class="myButton">Salvar</button></center>
				<br><br>
				
				</form>
				</div>
				
								
						
	</section><!-- end main -->
	
	
</body>
</html>
