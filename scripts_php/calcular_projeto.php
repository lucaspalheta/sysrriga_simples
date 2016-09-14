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
	$tubulacao_p = $_POST ["tubulacao_principal"];
	$tubulacao_d = $_POST ["tubulacao_derivacao"];
	$tubulacao_l = $_POST ["tubulacao_lateral"];
	
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
	/*Tubulação*/
	/*Principal*/
	$sql   = "SELECT *  FROM tubulacao WHERE descricao= '$tubulacao_p'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_tubulacao_p = $ln['id_tubulacao'];
		$descricao_tubulacao_p = $ln['descricao'];
		$dn_tubulcacao_p = $ln['dn'];
		$de_tubulacao_p = $ln['de'];
		$espessura_tubulacao_p = $ln['espessura'];
		$comprimento_tubulacao_p = $ln['comprimento'];
	
	/*-------------------------------------------*/
	
	/*Derivação*/
	$sql   = "SELECT *  FROM tubulacao WHERE descricao= '$tubulacao_d'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_tubulacao_d = $ln['id_tubulacao'];
		$descricao_tubulacao_d = $ln['descricao'];
		$dn_tubulcacao_d = $ln['dn'];
		$de_tubulacao_d = $ln['de'];
		$espessura_tubulacao_d = $ln['espessura'];
		$comprimento_tubulacao_d = $ln['comprimento'];
	
	/*-------------------------------------------*/
	
	/*Lateral*/
	$sql   = "SELECT *  FROM tubulacao WHERE descricao= '$tubulacao_l'";
        $qr    = mysql_query($sql) or die(mysql_error());
        $ln    = mysql_fetch_assoc($qr);
           
        $id_tubulacao_l = $ln['id_tubulacao'];
		$descricao_tubulacao_l = $ln['descricao'];
		$dn_tubulcacao_l = $ln['dn'];
		$de_tubulacao_l = $ln['de'];
		$espessura_tubulacao_l = $ln['espessura'];
		$comprimento_tubulacao_l = $ln['comprimento'];
	
	/*-------------------------------------------*/
	
	
	
	
	
/*Variáveis Adicionais*/

	$eto = $_POST ["eto"];
	$kc = $_POST ["kc"];
	$ef = $_POST ["ef"];
	$r_aspersor = $da_aspersor/2;
	
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
	
	/*Comprimento das Linhas Principal, de derivação e laterais*/
	$c = 1;
	
	if($c == 1){
		
		$principal=$comprimento_area-($r_aspersor);
		$derivacao = ($largura_area-($r_aspersor));
		if($principal<100){
			$lateral = $comprimento_area/2;
		}
		if($principal>100 || $principal<200){
			$var = $principal/80;/*Mudar o 80 por uma variável para permitir que o usuário escolha o tamanho médio da linha lateral*/
			$var = floor($var);
			$lateral = (($principal/$var)-($r_aspersor));
		}
	}else{};
	
	if($c == 0){
		
		$principal=$largura_area-($da_aspersor/2);
		$derivacao = ($comprimento_area-($r_aspersor));
		if($principal<100){
			$lateral = $largura_area/2;
		}
		if($principal>100 || $principal<200){
			$var = $principal/80;/*Mudar o 80 por uma variável para permitir que o usuário escolha o tamanho médio da linha lateral*/
			$var = floor($var);
			$lateral = (($principal/$var)-($r_aspersor));
		}
	};
	
	
	/*Número Linhas Laterais e de Derivação e aspersores*/
	
	$num_derivacao = $principal/($lateral+($r_aspersor));
	$num_derivacao = (floor($num_derivacao));
	$lateral = ((($principal+($r_aspersor))/$num_derivacao)-($da_aspersor));
	$principal = (($principal+$r_aspersor)-$lateral);
	$dist_derivacao = (($principal+($r_aspersor))/$num_derivacao)*2;
	$dist_derivacao_init = (($dist_derivacao-($da_aspersor))/2);
	$num_lateral = $derivacao/$da_aspersor;
	$num_lateral = floor($num_lateral);
	$dis_lateral = $da_aspersor;
	$num_aspersores_lateral = $lateral/$da_aspersor;
	$num_aspersores_lateral = floor($num_aspersores_lateral);
	$dis_aspersor = $da_aspersor;
	$num_total_derivacao = $num_derivacao*2;
	$num_total_lateral = $num_lateral*2;
	$num_total_aspersores = ($num_total_derivacao*$num_total_lateral*$num_aspersores_lateral);
	
	/*Funcionamento*/
	$num_derivacao_funci = 2;/*Colocar como um campo para o usuário escolher o numero de saidas ou calcular baseado no turno de rega*/
	$num_lateral_funci = ($num_derivacao_funci * $num_lateral)*2;
	
	
	
	/*Cálculo de fator F*/
	
	$num_saidas_principal = 25;/*Colocar como um campo para o usuário escolher o numero de saidas ou calcular baseado no turno de rega*/
	$num_saidas_derivacao = $num_lateral*2;/*Colocar como um campo para o usuário escolher o numero de saidas ou calcular baseado no turno de rega*/
	$num_saidas_lateral = $num_aspersores_lateral;/*Colocar como um campo para o usuário escolher o numero de saidas ou calcular baseado no turno de rega*/
	
	$f_principal = (1/(1.852+1))+(1/(2*$num_saidas_principal))+((sqrt(0.852))/(6*(pow($num_saidas_principal,2)))); 
	$f_derivacao = (1/(1.852+1))+(1/(2*$num_saidas_derivacao))+((sqrt(0.852))/(6*(pow($num_saidas_derivacao,2)))); 
	$f_lateral = (1/(1.852+1))+(1/(2*$num_saidas_lateral))+((sqrt(0.852))/(6*(pow($num_saidas_lateral,2)))); 
	
	/*Cálculos de Vazão das Linhas*/
	
	
	
	/*Todas as vazõs estão e litros por hora*/
	$vazao_lateral = $vazao_aspersor*$num_aspersores_lateral;
	$vazao_derivacao = $vazao_lateral*$num_lateral;
	$vazao_principal = $vazao_derivacao*$num_derivacao_funci;
	
	/*Todas as vazões estão em metros cubicos por segundo*/
	$vazao_lateral = $vazao_lateral/3600000;
	$vazao_derivacao = $vazao_lateral*$num_lateral;
	$vazao_principal = $vazao_derivacao*$num_derivacao_funci;
	
	
	
	/*Cálculos de Perda de carga*/
	
	
	
	
	echo "Evapotranspiração de referencia:  $eto <br>";
	echo "Evapotranspiração: $etc <br>";
	echo "Coenficiente de cultivo: $kc <br>";
	echo "Água por planta: $agua_planta <br>";
	echo "Irrigação Real Necessária: $irn <br>";
	echo "Irrigação total Necessária: $itn <br>";
	echo "Consumo de água do projeto: ".($agua_total/1000)." metros³<br>";
	echo "Capacidade de irrigação por hora: ".($capacidade_por_hora/1000)." metros³<br>";
	echo "Tempo de Irrigação Necesário: $tempo_irrigacao <br>";
	echo "Principal: $principal <br>";
	echo "Derivação: $derivacao <br>";
	echo "Lateral: $lateral <br>";
	echo "Número de Derivações: $num_derivacao <br>";
	echo "Distancia entre Derivações: $dist_derivacao metros, sendo que a primeira derivação deve começar a ".$dist_derivacao_init." metros do inicio ada linha principal<br>";
	echo "Número de Laterais: $num_lateral <br>";
	echo "Distância das Laterais: $dis_lateral metros, sendo que a primeira lateral deve inicial a ".$r_aspersor." metros da linha principal. <br>";
	echo "Número de aspersores por linha lateral: $num_aspersores_lateral <br>";
	echo "Distância dos aspersores: $dis_aspersor metros, sendo que o primeiro aspersor deve iniciar a ".$r_aspersor." metros da linha de derivação. <br>";
	echo "Número total de aspersores: $num_total_aspersores<br>";
	echo "F da Linha Principal: $f_principal<br>";
	echo "F da Linha Derivação: $f_derivacao<br>";
	echo "F da Linha Derivação: $f_lateral<br>";
	echo "Vazão da Linha Lateral: $vazao_lateral<br>";
	echo "Vazão da Linha Derivação: $vazao_derivacao<br>";
	echo "Vazão da Linha Principal: $vazao_principal<br>";
?>