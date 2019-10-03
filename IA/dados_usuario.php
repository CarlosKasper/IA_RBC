<!DOCTYPE html>
<html>
<head>
	<title>Dados da Empresa</title>

	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
 
		.button {
		  background-color: dodgerblue; /* Green */
		  border: none;
		  color: white;
		  padding: 10px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 14px;
		}
	 
</style>
</head>
<body>


<?php
session_start();
require('connection.php');
 		$login = $_SESSION['login'];
		$modulo = $_SESSION['modulo']; 
		$found = mysqli_query($conexao,"SELECT * FROM  userconhecimento");

			if($modulo == 3){
				if(mysqli_num_rows($found) > 0){

					?>
					
						<table id="customers">
							<tr><h1>Dados dos usuários :
								<td>Nome  </td>
								<td> PHP  </td>
								<td> Java  </td>
								<td> Javascript  </td>
								<td> C#  </td>
								<td> C++  </td>
								<td> Ruby  </td>
								<td> Python  </td>
								<td> CSS  </td>
								<td> MySql  </td>
								<td> Oracle  </td>
								<td> Sqlite  </td>
								<td> Excluir </td>


								<?php while($dados= mysqli_fetch_assoc($found)){
										 
														$nome = $dados['nome_user'];
														$id = $dados['id'];
														$php = $dados['php'];
														$java = $dados['java'];
														$javascript = $dados['javascript'];
														$csharp = $dados['csharp'];
														$cplusplus = $dados['cplusplus'];
														$ruby = $dados['ruby'];
														$python = $dados['python'];
														$css = $dados['css'];
														$mysql = $dados['mysql'];
														$oracle = $dados['oracle'];
														$sqlite = $dados['sqlite'];
													?>
												</tr>
												<tr>
														
														<td><br><label> <?php echo $nome ?> </label></td>
														<td><br><label> <?php echo $php ?> </label></td>	
														<td><br><label> <?php echo $java ?> </label></td>	
														<td><br><label> <?php echo $javascript ?> </label></td>	
														<td><br><label> <?php echo $csharp ?> </label></td>	
														<td><br><label> <?php echo $cplusplus ?> </label></td>	
														<td><br><label> <?php echo $ruby ?> </label></td>	
														<td><br><label> <?php echo $python ?> </label></td>	
														<td><br><label> <?php echo $css ?> </label></td>	
														<td><br><label> <?php echo $mysql ?> </label></td>	
														<td><br><label> <?php echo $oracle ?> </label></td>	
														<td><br><label> <?php echo $sqlite ?> </label></td>
														<td><br><label> <?php echo "<a href='deletar_conhecimento_usuario.php?id=" . $dados['id'] . "'>Apagar</a><br></label></td>";?>
															 
														
													</tr>
												
											<?php 
											
								}?></table><br><form action="indexEspecialista.php"><button class="button">Voltar</button></form>
								<?php
				}else {
						?><h1>Não há usuários cadastrados.</h1><br><form action="indexEspecialista.php"><button class="button">Voltar</button></form><?php
				}		
			}else{
				header('location:apresentation.php');
				
			}?>

 </body>
</html>