
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formPropriedade").validate({
				//Define Regras
				rules:{
					prop_nome:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true, minlength: 10
					},
					prop_endereco:{
						required: true, minlength: 10
					},
					prop_cep:{	
						required: true, digits: true, minlength: 8
					},
					prop_cidade:{	
						required: true,
					},
					prop_estado:{	
						required: true, minlength: 4
					},
					prop_pais:{
						required: true, minlength: 4
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				prop_nome:{
					required: "Digite seu nome.",
					minLength: "O seu nome deve conter no mínimo 10 caracteres."
				},
				prop_endereco:{
					required: "Digite seu endereço.",
					minLength: "Seu endereço deve conter no mínimo 10 caracteres."
				},
				prop_cep:{
					required: "Digite seu CEP.",
					minlength: "Seu CEP contem 8 caracteres.",
					digits: "O CEP é formado apenas por digitos."
				},
				prop_cidade:{
					required: "Digite sua cidade."
				},
				prop_estado:{
					required: "Digite seu estado."
				},
				prop_pais:{
					required: "Digite seu país."
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formPropriedade"  method="post" action="../scripts_php/cadastro_propriedade.php">
<center><p><h1>Propriedade</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='prop_nome' id="proo_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Endereço</label><input type="text" class="form-control" name='prop_endereco' id="prop_endereco" placeholder='Endereço'/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">CEP</label><input type="text" class="form-control" name='prop_cep' id="prop_cep" placeholder='CEP *'/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">Cidade</label><input type="text" class="form-control" name='prop_cidade' id="prop_cidade" placeholder='Cidade'/>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">Estado</label><input type="text" class="form-control" name='prop_estado' id="prop_estado" placeholder='Estado'>
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">País</label><input type="text" class="form-control" name='prop_pais' id="prop_pais" placeholder='País'>
							</div>
						
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>
