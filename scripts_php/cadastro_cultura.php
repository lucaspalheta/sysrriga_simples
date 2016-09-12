<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Técnico*/

	$nome = $_POST ["cult_nome"];
	$z = $_POST ["cult_z"];
	$ks= $_POST ["cult_ks"];
	$el = $_POST ["cult_el"];
	$ep = $_POST ["cult_ep"];
	

	
	mysql_query("INSERT INTO cultura(id_cultura,nome,z,ks,esp_linhas,esp_plantas) VALUES ('','$nome','$z','$ks','$el','$ep')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>