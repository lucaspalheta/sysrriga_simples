<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis Área*/

	$identificacao = $_POST ["identificacao"];
	$largura = $_POST ["largura"];
	$comprimento = $_POST ["comprimento"];
	$desnivel = $_POST ["desnivel"];
	$cc = $_POST ["solo_cc"];
	$pm = $_POST ["solo_pm"];
	$ds = $_POST ["solo_ds"];
	$vib = $_POST ["solo_vib"];
	

	
	mysql_query("INSERT INTO area(id_area,identificacao,largura,comprimento,desnivel,cc,pm,ds,vib) VALUES ('','$identificacao','$largura','$comprimento','$desnivel','$cc','$pm','$ds','$vib')");
	
	mysql_close($conexao);
	
		 header("Location:../cadastros/inicial.php");
?>