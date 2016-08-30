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
		<a href="index.php"><div class="btn dropdown-toggle" >sair</div></a>
	</div>
	
		
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
							<div class="row">
								<div class="col-md-12 wwa">
									<span name="about" ></span>
									<h1>Relatório</h1>
								</div>
							</div>
						
											
			<form    role="form" method="post" action="pes_relatorio.php" >
                    
						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black"><h3>Nome do Projeto:</h3></label>
							<input type="text" name="pesquisa" class="form-control" placeholder='Nome do Projeto'>
							
							</div>
	
						</fieldset>
					 	
					 
				 	<br>
				  
					<center><button type="submit" id="cadastro_btn" class="myButton"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>  Pesquisar </button></center>
				<br><br>
				
				</form>
</div>
								
						
	</section><!-- end main -->
	
</body>
</html>
