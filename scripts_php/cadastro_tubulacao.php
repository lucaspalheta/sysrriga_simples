<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Tubulação*/

	$descricao = $_POST ["tubo_descricao"];
	$dn = $_POST ["tubo_dn"];
	$de = $_POST ["tubo_de"];
	$espessura = $_POST ["tubo_espessura"];
	$comprimento = $_POST ["tubo_comprimento"];
	
	mysql_query("INSERT INTO tubulacao (id_tubulacao,descricao,dn,de,espessura,comprimento) VALUES ('','$descricao','$dn','$de','$espessura','$comprimento')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>