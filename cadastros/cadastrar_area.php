
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formArea").validate({
				//Define Regras
				rules:{
					//será obrigatório (required) e terá tamanho mínimo (minLength)
					identificacao:{
						required: true
					},
					largura:{
						required: true
					},
					comprimento:{
						required: true
					},
					desnivel:{	
						required: true
					},
					solo_cc:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true 
					},
					solo_pm:{
						required: true 
					},
					solo_ds:{	
						required: true
					},
					solo_vib:{	
						required: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				identificacao:{
					required: "Informe uma identificação."
				},
				largura:{
					required: "Informe a largura."
				},
				comprimento:{
					required: "Informe o comprimento."
				},
				desnivel:{
					required: "Informe o desnível."
				}
				solo_cc:{
					required: "Informe a capacidade de campo."
				},
				solo_pm:{
					required: "Informe o ponto de murchamento."
				},
				solo_ds:{
					required: "Informe a densidade do solo."
				},
				solo_vib:{
					required: "Informe a velocidade de infiltração básica."
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formArea"  method="post" action="../scripts_php/cadastro_area.php">
<center><p><h1>Área</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Identificação</label><input type="text" class="form-control" name='identificacao' id="identificacao" placeholder='Área 1'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Largura</label><input type="text" class="form-control" name='largura' id="largura" placeholder='metros'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento</label><input type="text" class="form-control" name='comprimento' id="comprimento" placeholder='metros'/>
							</div>
							<div class="form-group col-md-4 col-sm-6 col-xs-6 evapotranspiracao">
								<label class="control-label color_black">Desnível</label><input type="text" class="form-control" name='desnivel' id="desnivel" placeholder='metro por metro'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade de Campo</label><input type="text" class="form-control" name='solo_cc' id="solo_cc" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Ponto de Murchamento</label><input type="text" class="form-control" name='solo_pm' id="solo_pm" placeholder='Em centimetros'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Densidade do Solo</label><input type="text" class="form-control" name='solo_ds' id="solo_ds" placeholder='Entre 0 e 1'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Velocidade de Infiltração básica</label><input type="text" class="form-control" name='solo_vib' id="solo_vib" placeholder='Entre 0 e 1'/>
							</div>
						
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


