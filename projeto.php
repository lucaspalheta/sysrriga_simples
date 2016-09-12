<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>
<?php require 'objetos/validacao.php' ?>
	
<body>
	<section class="main clearfix">
	
	
	<div class="dropdown pull-right align-login btn-group">
		<a href="index.php"><div class="btn dropdown-toggle" >sair</div></a>
	</div>
	
	
	
<center>
			
			<form class="container" >
						
						
						
							<ul id="info-gotejamento" class="col-lg-12 ">
								<?php
	 
	  include "IFPA_sysrriga_20160010019982000.inc";
	 
	 $nome2 = $_SESSION['nome_usuario'];
	 $senha2 = $_SESSION['senha_usuario'];
	 
	 $resultado = mysql_query("SELECT * FROM usuarios where email = '$nome2' and senha='$senha2' ");
     $linhas_pesquisa = mysql_num_rows($resultado);
 
       if($linhas_pesquisa == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado foi encontrado !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
       }
  
        if($linhas_pesquisa != 0){
       for($i = 0; $i < $linhas_pesquisa; $i++){
       $registro = mysql_fetch_row($resultado);
         
       $idUsuario = $registro[0];

	   
      } 
  } 


	  $sql = "select * from dados_projeto Where id_usuario = $idUsuario";
	 $qr = mysql_query($sql) or die (mysql_error());
	 
  GeraColunas(2, $sql);
 	
 	echo"</td>";
 	echo"</tr>";
  	echo"</table>";
 	
 	
 	function GeraColunas($pNumColunas, $pQuery) {
 	$imprimir = mysql_query($pQuery);
	
	echo "<center><h1><font color='333'> Meus Projetos </font></h1></center><hr>";
	
 	echo ('<table class="col-lg-12">');
	
	  echo '<table width="100%" class="col-lg-12  col-sm-12 col-md-12 ">';
 	  echo "<tr>";
 	  echo "<td>";
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
	  echo "<tr>";
 	  echo "<td>";
	  echo '<li class="info-01 col-lg-12">';
	  echo "<center><a href='index2.php'>Novo</a></center>";
	  echo '</li></div><br></td>';
 	  echo "</tr>";
 	  echo "</table>";
 	  echo "</td>";
 	  echo "</tr>";
 	  echo "</table>";
	  
 	 for($i = 0; $i <= mysql_num_rows($imprimir); ++$i) {
 	 
 	 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
 	  $linha = mysql_fetch_array($imprimir);
 	  if ($i > $linha) {
 	   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
 	   break;
          }
 	 
      $id_projeto = $linha[1];
	  $nome_projeto = $linha[2];
 	  
  
   if ( $intCont == 0 )
      echo "<tr>\n";
 	  echo "<td>";
 	  // Aqui você inclui o conteudo
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
 	  echo "<tr>";
 	  echo "<td>";
 	  echo '<table width="100%" class="col-lg-12 col-sm-12 col-md-12 ">';
	  echo "<tr>";
 	  echo "<td>";
	  echo '<li class="info-01 col-lg-12">';
	  echo "<center><a href='lista_dados_projeto.php?id=".$id_projeto."&acao=add''>$nome_projeto</a></center>";
	  echo '</li></div><br></td>';
 	  echo "</tr>";
 	  echo "</table>";
 	  echo "</td>";
 	  echo "</tr>";
 	  echo "</table>";
	 
 	 
 	   // Aqui é o final do conteudo
 	  echo "</td>";
 	 
 	  if ( $intCont == $pNumColunas-1 ) {
 	   echo "</tr>\n";
 	  } else { $i++; }
	  
 	 }
 	 
 	 }
	 

 	echo ('</table>');
 	}
 	 
	
	 mysql_close($conexao);
	 
	
	?>
							</ul>
							
							
							
			</form>
						</center>
					
			
						
				
								
						
	</section><!-- end main -->
	
	
</body>
</html>
