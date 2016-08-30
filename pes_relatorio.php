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
	
	
	<script>
		$(function(){
    $(".btn-toggle").click(function(e){
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});
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
		<a href="index.php"><div class="btn " >sair</div></a>
	</div>
	
		<center>
			<form >

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h2>Projetos Encontrados</h2>
  <?php 
  
  $query = "SELECT * FROM dados_projeto";
  $result = $mysqli->query($query);
  
  
  ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome do Projeto</th>
        <th>Técnico Responsável</th>
        <th>Gerar Relatório</th>
		
      </tr>
    </thead>
    <tbody>
	<?php
	
	foreach ($result as $fila) {
	  
	?>
	
      <tr>
        <td><?php echo $fila['proj_nome']?></td>
        <td><?php echo $fila['proj_tecResponsavel']?></td>
		<!--aqui se coloca as variáveis para serem passadas para a outra página, creio que devemos colocar uma página php apenas para receber e passar ao pdf como POST-->
        <td><a href="gerador_relatorio.php?
		id=<?php echo $fila['id_projeto'];
		
		
		
		
		
		
		?>">Gerar Relatório</a></td>
      </tr>
     <?php
	
  }
	 ?>
     
    </tbody>
  </table>
</div>

</center>


			</form>
						</center>
								
						
	</section><!-- end main -->
	
</body>
</html>
