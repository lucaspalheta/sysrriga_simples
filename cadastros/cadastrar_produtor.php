
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formProdutor").validate({
				//Define Regras
				rules:{
					prod_nome:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true, minlength: 10
					},
					prod_telefone:{	
						required: true, digits: true
					},
					prod_email:{
						required: true, email: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				prod_nome:{
					required: "Digite seu nome.",
					minLength: "O seu nome deve conter no mínimo 10 caracteres."
				},
				prod_telefone:{
					required: "Digite seu telefone.",
					minLength: "Digite um número de telefone válido."
				},
				prod_email:{
					required: "Digite o seu e-mail para contato.",
					minLength: "Digite um e-mail válido."
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formProdutor"  method="post" action="../scripts_php/cadastro_produtor.php">
<center><p><h1>Produtor</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='prod_nome' id="tec_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">telefone</label><input type="text" class="form-control" name='prod_telefone' id="prod_telefone" placeholder='Ex: Agrônomo'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Email</label><input type="text" class="form-control" name='prod_email' id="prod_email" placeholder='Email *'>
							</div>
							
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


	





</body>

</html>