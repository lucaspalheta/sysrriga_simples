

<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>
<?php require 'objetos/validacao.php' ?>
			
<body>		
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
