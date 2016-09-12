
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formAspersor").validate({
				//Define Regras
				rules:{
					asp_modelo:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true 
					},
					asp_vazao:{
						required: true
					},
					asp_ps:{	
						required: true
					},
					asp_da:{	
						required: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				asp_modelo:{
					required: "Informe o modelo do aspersor."
				},
				asp_vazao:{
					required: "Informe a vazão do aspersor.",
				},
				asp_ps:{
					required: "Informe a pressão de serviço.",
				},
				asp_da:{
					required: "Informe diâmetro de alcance.",
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formAspersor"  method="post" action="../scripts_php/cadastro_aspersor.php">
<center><p><h1>Aspersor</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Modelo</label><input type="text" class="form-control" name='asp_modelo' id="asp_modelo" placeholder='Modelo'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Vazão</label><input type="text" class="form-control" name='asp_vazao' id="asp_vazao" placeholder='(l/h)'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Pressão de Serviço</label><input type="text" class="form-control" name='asp_ps' id="asp_ps" placeholder='(mca)'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Diâmetro de Alcance</label><input type="text" class="form-control" name='asp_da' id="asp_da" placeholder='metros'/>
							</div>
							
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


	





</body>

</html>