

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
	<script type="js/chart_js/src/chart.js" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery_3_1_0_min.js"></script>
	
	
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
	
	
	<div class="dropdown pull-right align-login btn-group btn-toggle" data-element="#minhaDiv">
		<div class="btn dropdown-toggle" data-toggle="dropdown">Login</div>
	</div>
	
	
							<span class=" dropdown pull-right align-login-box input-style col-lg-2 col-md-2 col-so-12" id="minhaDiv" style="display:none;">
								<form class="form form-login" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
								<center><h3>Entrar</h3></center>
									<div class="form-group">
										<label class="sr-only" >Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" >
									</div>
									<div class="form-group">
										<label class="sr-only" >Senha</label>
										<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" >
										<!--<div class="help-block text-right"><a href="">Esqueceu sua senha ?</a></div>-->
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="status">Entrar</button>
									</div>
									<div class="checkbox">
										<!--<label class="text-left">
											<input type="checkbox">Lembrar
										</label>-->
									</div>
								</form>
							</span>
						

	
	
	
	
	
		<div class="container">
				
								<form class="form" role="form" method="post" action="cadastro.php" accept-charset="UTF-8"  id="cadastro_nav">
									<center><h3>Cadastre-se Gratuitamente</h3></center>
									<center><h4>E tenha acesso a todas as funções do sistema.</h4></center>
									<div class="form-group">
										<label class="sr-only" >Nome</label>
										<input type="text" class="form-control" id="nome_cadastro" name="nome_cadastro" placeholder="Nome Completo" required>
									</div>
									<div class="form-group">
										<label class="sr-only" >Email</label>
										<input type="email" class="form-control" id="email_cadastro" name="email_cadastro" placeholder="Email" required>
									</div>
									<div class="form-group">
										<label class="sr-only" >Senha</label>
										<input type="password" class="form-control" id="senha_cadastro" name="senha_cadastro" placeholder="Senha" required>
									</div>
									<div class="form-group">
										<button type="submit" id="cadastro_btn" class="btn btn-primary btn-block">Cadastrar</button>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Concordo com os <a href="" >Termos do Sysrriga.</a>
										</label>
									</div>
								</form>
		</div>
						
	</section><!-- end main -->
	
</body>
</html>
