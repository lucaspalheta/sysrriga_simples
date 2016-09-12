
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formTecnico").validate({
				//Define Regras
				rules:{
					tec_nome:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true, minlength: 10
					},
					tec_formacao:{
						required: true, minlength: 10
					},
					tec_crea:{	
						required: true, digits: true
					},
					tec_telefone:{	
						required: true, digits: true
					},
					tec_email:{
						required: true, email: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				tec_nome:{
					required: "Digite seu nome.",
					minLength: "O seu nome deve conter no mínimo 10 caracteres."
				},
				tec_formacao:{
					required: "Digite sua formação.",
					minLength: "Sua formação deve conter no mínimo 10 caracteres."
				},
				tec_crea:{
					required: "Digite seu número do CREA.",
					minLength: "Seu número do CREA contem 10 caracteres."
				},
				tec_telefone:{
					required: "Digite seu telefone.",
					minLength: "Digite um número de telefone válido."
				},
				tec_email:{
					required: "Digite o seu e-mail para contato.",
					minLength: "Digite um e-mail válido."
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formTecnico"  method="post" action="../scripts_php/cadastro_tecnico.php">
<center><p><h1>Técnico</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='tec_nome' id="tec_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Formação</label><input type="text" class="form-control" name='tec_formacao' id="tec_formacao" placeholder='Ex: Agrônomo'/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">Nº CREA</label><input type="text" class="form-control" name='tec_crea' id="tec_crea" placeholder='Nº CREA *'/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">Telefone</label><input type="text" class="form-control" name='tec_telefone' id="tec_telefone" placeholder='Telefone'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Email</label><input type="text" class="form-control" name='tec_email' id="tec_email" placeholder='Email *'>
							</div>
							
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


	





</body>

</html>