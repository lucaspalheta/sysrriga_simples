<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Técnico*/

	$nome = $_POST ["prop_nome"];
	$endereco = $_POST ["prop_endereco"];
	$cep = $_POST ["prop_cep"];
	$cidade = $_POST ["prop_cidade"];
	$estado = $_POST ["prop_estado"];
	$país = $_POST ["prop_pais"];


	
	mysql_query("INSERT INTO propriedade(id_propriedade,nome,endereco,cep,cidade,estado,pais) VALUES ('','$nome','$endereco','$cep','$cidade','$estado','$pais')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>