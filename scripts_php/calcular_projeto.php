<?php
	echo "<meta charset='utf-8'>";
include "../IFPA_sysrriga_20160010019982000.inc";

/*Variáveis*/

	$tecnico = $_POST ["tecnico"];
	$produtor = $_POST ["produtor"];
	$propriedade = $_POST ["propriedade"];
	$area = $_POST ["area"];
	$cultura = $_POST ["cultura"];
	$aspersor = $_POST ["aspersor"];
	
/*Buascando Valores*/

	/*tecnico*/
	$sql   = "SELECT *  FROM tecnico WHERE nome= '$tecnico'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_tecnico = $ln['id_tecnico'];
		$nome_tecnico = $ln['nome'];
		$formacao_tecnico = $ln['formacao'];
		$n_crea_tecnico = $ln['n_crea'];
		$telefone_tecnico = $ln['telefone'];
		$email_tecnico = $ln['email'];

	/*-------------------------------------------*/
	
	/*Produtor*/
	$sql   = "SELECT *  FROM produtor WHERE nome= '$produtor'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_produtor = $ln['id_produtor'];
		$nome_produtor = $ln['nome'];
		$telefone_produtor = $ln['telefone'];
		$email_produtor = $ln['email'];
		$telefone_tecnico = $ln['telefone'];
		$email_tecnico = $ln['email'];

	/*-------------------------------------------*/
	
		/*Propriedade*/
	$sql   = "SELECT *  FROM propriedade WHERE nome= '$propriedade'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_propriedade = $ln['id_propriedade'];
		$nome_propriedade = $ln['nome'];
		$endereco_propriedade = $ln['endereco'];
		$cep_propriedade = $ln['cep'];
		$cidade_propriedade = $ln['cidade'];
		$estado_propriedade = $ln['estado'];
		$pais_propriedade = $ln['pais'];

	/*-------------------------------------------*/
	
		/*Área*/
	$sql   = "SELECT *  FROM area WHERE identificacao= '$area'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_area = $ln['id_area'];
		$identificacao_area = $ln['identificacao'];
		$largura_area = $ln['largura'];
		$comprimento_area = $ln['comprimento'];
		$desnivel_area = $ln['desnivel'];
		$cc__area = $ln['cc'];
		$pm_area = $ln['pm'];
		$ds_area = $ln['ds'];
		$vib_area = $ln['vib'];

	/*-------------------------------------------*/
	
		/*Cultura*/
	$sql   = "SELECT *  FROM cultura WHERE nome= '$cultura'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_cultura = $ln['id_cultura'];
		$nome_cultura = $ln['nome'];
		$z_cultura = $ln['z'];
		$ks_cultura = $ln['ks'];
		$el_cultura = $ln['esp_linhas'];
		$ep_cultura = $ln['esp_plantas'];
		
	/*-------------------------------------------*/
	
		/*Aspersor*/
	$sql   = "SELECT *  FROM aspersor WHERE modelo= '$aspersor'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_aspersor = $ln['id_aspersor'];
		$modelo_aspersor = $ln['modelo'];
		$vazao_aspersor = $ln['vazao'];
		$ps_aspersor = $ln['ps'];
		$da_aspersor = $ln['da'];
	
	/*-------------------------------------------*/
	
/*Variáveis Adicionais*/

	$eto = $_POST ["eto"];
	$kc = $_POST ["kc"];
	$ef = $_POST ["ef"];
	
/*Cálculos*/

	/*área ocupada por planta*/
	$area_planta=($el_cultura*$ep_cultura);
	echo "Área ocupada por Planta: $area_planta <br>";

	/*Área de cultivo*/
	$area_cultivo = ($comprimento_area*$largura_area)/10000;
	echo "Área total de Irrigação: $area_cultivo <br>";
	
	/*Numero de Plantas*/
	$numero_plantas = (($area_cultivo*10000)/$area_planta);
	echo "Número de Plantas Irrigadas: $numero_plantas <br>";
	
	/*Área Molhada*/
	$area_molhada = ((3.14159265359*(pow($da_aspersor,2)))/4);
	echo "Área Molhada pelo aspersor: $area_molhada <br>";
	
	/*Evapotranspiração*/
	$etc = ($eto*$kc);
	
	/*Agua necessária por planta*/
	$agua_planta = ($etc*$area_planta);
	
	/*Irrigação real necessaria*/
	$irn = ($agua_planta*$numero_plantas);
	
	/*Irrigação total necessaria*/
	$itn = ($irn/($ef/100));
	
	/*Consumo total do projeto*/
	$agua_total = ($itn);
	
	/*Número de Aspersores*/
	$capacidade_por_hora = ($numero_plantas*$vazao_aspersor);
	
	/*Tempo de irrigação*/
	$tempo_irrigacao = ($itn/$capacidade_por_hora);
	
	echo "Evapotranspiração de referencia:  $eto <br>";
	echo "Evapotranspiração: $etc <br>";
	echo "Coenficiente de cultivo: $kc <br>";
	echo "Água por planta: $agua_planta <br>";
	echo "Irrigação Real Necessária: $irn <br>";
	echo "Irrigação total Necessária: $itn <br>";
	echo "Consumo de água do projeto: ".($agua_total/1000)." metros³<br>";
	echo "Capacidade de irrigação por hora: ".($capacidade_por_hora/1000)." metros³<br>";
	echo "Tempo de Irrigação Necesário: $tempo_irrigacao <br>";
	
	
	
?>