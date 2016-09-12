<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Técnico*/

	$modelo = $_POST ["asp_modelo"];
	$vazao = $_POST ["asp_vazao"];
	$ps = $_POST ["asp_ps"];
	$da = $_POST ["asp_da"];

	
	mysql_query("INSERT INTO aspersor(id_aspersor,modelo,vazao,ps,da) VALUES ('','$modelo','$vazao','$ps','$da')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>