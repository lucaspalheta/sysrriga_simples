<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Técnico*/

	$nome = $_POST ["tec_nome"];
	$formacao = $_POST ["tec_formacao"];
	$crea = $_POST ["tec_crea"];
	$telefone = $_POST ["tec_telefone"];
	$email = $_POST ["tec_email"];
	

	
	mysql_query("INSERT INTO tecnico(id_tecnico,nome,formacao,n_crea,telefone,email) VALUES ('','$nome','$formacao','$crea','$telefone','$email')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>