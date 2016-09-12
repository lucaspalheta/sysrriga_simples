<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>


		
<body>			
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
