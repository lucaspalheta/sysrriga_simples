
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formTubulacao").validate({
				//Define Regras
				rules:{
					tubo_descricao:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true 
					},
					tubo_dn:{
						required: true
					},
					tubo_de:{	
						required: true
					},
					tubo_espessura:{	
						required: true
					},
					tubo_comprimento:{	
						required: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				tubo_descricao:{
					required: "Informe o material."
				},
				tubo_dn:{
					required: "Informe o diametro nominal.",
				},
				tubo_de:{
					required: "Informe o diâmetro externo.",
				},
				tubo_espessura:{
					required: "Informe a espessura.",
				},
				tubo_comprimento:{
					required: "Informe o comprimento.",
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formTubulacao"  method="post" action="../scripts_php/cadastro_tubulacao.php">
<center><p><h1>Tubulação</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Descrição</label><input type="text" class="form-control" name='tubo_descricao' id="tubo_descricao" placeholder='Ex: PVC'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Diâmetro Nominal</label><input type="text" class="form-control" name='tubo_dn' id="tubo_dn" placeholder='Em mm'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Diâmetro Externo</label><input type="text" class="form-control" name='tubo_de' id="tubo_de" placeholder='Em mm'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espessura da Parede</label><input type="text" class="form-control" name='tubo_espessura' id="tubo_espessura" placeholder='Em mm'/>
							</div>
							<div class="form-group col-md-6 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento</label><input type="text" class="form-control" name='tubo_comprimento' id="tubo_comprimento" placeholder='metros'/>
							</div>
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


	





</body>

</html>