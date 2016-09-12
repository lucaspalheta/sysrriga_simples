<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Técnico*/

	$nome = $_POST ["prod_nome"];
	$telefone = $_POST ["prod_telefone"];
	$email = $_POST ["prod_email"];
	

	
	mysql_query("INSERT INTO produtor(id_produtor,nome,telefone,email) VALUES ('','$nome','$telefone','$email')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>