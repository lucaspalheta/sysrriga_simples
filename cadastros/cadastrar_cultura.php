
<?php require 'inicio_cadastro.php' ?>
<?php require 'head_cadastro.php' ?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="..\js\dist\jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		
			$("#formCultura").validate({
				//Define Regras
				rules:{
					cult_nome:{
						//será obrigatório (required) e terá tamanho mínimo (minLength)
						required: true, minlength: 3
					},
					cult_z:{
						required: true
					},
					cult_ks:{	
						required: true
					},
					cult_el:{
						required: true
					},
					cult_ep:{	
						required: true
					}
			},
			//Mensagem de erro para cada regra
			messages:{
				cult_nome:{
					required: "Digite o nome da Cultura."
				},
				cult_z:{
					required: "Digite a profundidade das raizes.",
				},
				cult_ks:{
					required: "Digite o coeficiente de cultivo.",
				},
				cult_el:{
					required: "Digite o espaçamento entre linhas.",
				},
				cult_ep:{
					required: "Digite o espaçamento entre plantas.",
				}
			}
	});
	});

</script>

<body>
<form class="container form-horizontal  form-border" id="formCultura"  method="post" action="../scripts_php/cadastro_cultura.php">
<center><p><h1>Cultura</h1></p></center>
						<fieldset> 
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='cult_nome' id="cult_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Profundidade das raizes (Z)</label><input type="text" class="form-control" name='cult_z' id="cult_z" placeholder='Em centimetros'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Coeficiente de cultivo (Ks)</label><input type="text" class="form-control" name='cult_ks' id="cult_ks" placeholder='Entre 0 e 1'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre linhas</label><input type="text" class="form-control" name='cult_el' id="cult_el" placeholder='Entre 0 e 1'/>
							</div>
							<div class="form-group col-md-4 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre plantas</label><input type="text" class="form-control" name='cult_ep' id="cult_ep" placeholder='Entre 0 e 1'/>
							</div>
							
							
						</fieldset>
						<center><button type="submit" id="cadastro_btn" class="btn">Cadastrar</button></center>
</form>


	





</body>

</html>