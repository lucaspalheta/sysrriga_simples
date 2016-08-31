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
	
	
	
<center>
			

			
			
		

				
				
				
					
			<form class="container" >
						
						
						
							<ul id="info-gotejamento" class="col-lg-12 ">
								<?php
	 
	  include "IFPA_sysrriga_20160010019982000.inc";
	 
	 $nome2 = $_SESSION['nome_usuario'];
	 $senha2 = $_SESSION['senha_usuario'];
	 
	 $resultado = mysql_query("SELECT * FROM usuarios where email = '$nome2' and senha='$senha2' ");
     $linhas_pesquisa = mysql_num_rows($resultado);
 
       if($linhas_pesquisa == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado foi encontrado !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
       }
  
        if($linhas_pesquisa != 0){
       for($i = 0; $i < $linhas_pesquisa; $i++){
       $registro = mysql_fetch_row($resultado);
         
       $idUsuario = $registro[0];

	   
      } 
  } 


	  $sql = "select * from dados_projeto Where id_usuario = $idUsuario";
	 $qr = mysql_query($sql) or die (mysql_error());
	 
  GeraColunas(2, $sql);
 	
 	echo"</td>";
 	echo"</tr>";
  	echo"</table>";
 	
 	
 	function GeraColunas($pNumColunas, $pQuery) {
 	$imprimir = mysql_query($pQuery);
	
	echo "<center><h1><font color='333'> Meus Projetos </font></h1></center><hr>";
	
 	echo ('<table class="col-lg-12">');
	
	  echo '<table width="100%" class="col-lg-12  col-sm-12 col-md-12 ">';
 	  echo "<tr>";
 	  echo "<td>";
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
	  echo "<tr>";
 	  echo "<td>";
	  echo '<li class="info-01 col-lg-12">';
	  echo "<center><a href='index2.php'>Novo</a></center>";
	  echo '</li></div><br></td>';
 	  echo "</tr>";
 	  echo "</table>";
 	  echo "</td>";
 	  echo "</tr>";
 	  echo "</table>";
	  
 	 for($i = 0; $i <= mysql_num_rows($imprimir); ++$i) {
 	 
 	 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
 	  $linha = mysql_fetch_array($imprimir);
 	  if ($i > $linha) {
 	   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
 	   break;
          }
 	 
      $id_projeto = $linha[1];
	  $nome_projeto = $linha[2];
 	  
  
   if ( $intCont == 0 )
      echo "<tr>\n";
 	  echo "<td>";
 	  // Aqui você inclui o conteudo
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
 	  echo "<tr>";
 	  echo "<td>";
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
	  echo "<tr>";
 	  echo "<td>";
	  echo '<li class="info-01 col-lg-12">';
	  echo "<center><a href='lista_dados_projeto.php?id=".$id_projeto."&acao=add''>$nome_projeto</a></center>";
	  echo '</li></div><br></td>';
 	  echo "</tr>";
 	  echo "</table>";
 	  echo "</td>";
 	  echo "</tr>";
 	  echo "</table>";
	 
 	 
 	   // Aqui é o final do conteudo
 	  echo "</td>";
 	 
 	  if ( $intCont == $pNumColunas-1 ) {
 	   echo "</tr>\n";
 	  } else { $i++; }
	  
 	 }
 	 
 	 }
	 

 	echo ('</table>');
 	}
 	 
	
	 mysql_close($conexao);
	 
	
	?>
							</ul>
							
							
							
			</form>
						</center>
					
			
						
				
								
						
	</section><!-- end main -->
	
	
</body>
</html>
