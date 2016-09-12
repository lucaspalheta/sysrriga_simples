

<?php require 'objetos/inicio.php' ?>
<?php require 'objetos/head.php' ?>
<?php require 'objetos/header.php' ?>
<?php require 'objetos/validacao.php' ?>

<body>

			
	<section class="main clearfix">
	
	
	<div class="dropdown pull-right align-login btn-group">
		<a href="index.php"><div class="btn " >sair</div></a>
	</div>
	
		<center>
			<form >

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h2>Projetos Encontrados</h2>
  <?php 
  $busca= $_POST['pesquisa'];
  $query = "SELECT * FROM dados_projeto WHERE proj_nome= '$busca'";
  $result = $mysqli->query($query);
   $resultado = mysql_query("SELECT * FROM dados_projeto WHERE proj_nome = '$busca' ");
	
  
  
  ?>
  <?php 
	
	if($resultado != "") {
	  echo "<br><h3>Não há resultados em sua busca!</h3>";
	 
	}if($resultado ==""){
	?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome do Projeto</th>
        <th>Técnico Responsável</th>
        <th>Gerar Relatório</th>
		
      </tr>
    </thead>
    <tbody>
	
	
	<?php
	
	foreach ($result as $fila) {
	  
	?>
	
      <tr>
        <td><?php echo $fila['proj_nome']?></td>
        <td><?php echo $fila['proj_tecResponsavel']?></td>
		<!--aqui se coloca as variáveis para serem passadas para a outra página, creio que devemos colocar uma página php apenas para receber e passar ao pdf como POST-->
        <td><a href="gerador_relatorio.php?
		id=<?php echo $fila['id_projeto'];
		
		
		
		
		
		
		?>">Gerar Relatório</a></td>
      </tr>
     <?php
	
  }}
	 ?>
     
    </tbody>
  </table>
</div>

</center>


			</form>
						</center>
								
						
	</section><!-- end main -->
	
</body>
</html>
