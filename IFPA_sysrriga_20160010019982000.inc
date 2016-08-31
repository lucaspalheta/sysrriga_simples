<?php
     /* conexao com banco de dados */
	    $hostname = "mysql.hostinger.com.br";
	    $username = "u238434653_sys";
		$senha = "usbwsys";
		$banco = "u238434653_sys";
		
		$conexao = mysql_connect($hostname,$username,$senha);
		
		mysql_select_db($banco,$conexao);
		
		$mysqli = new mysqli('mysql.hostinger.com.br','u238434653_sys','usbwsys','u238434653_sys');
			   
?>	
