<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar Empresas</title>
	<style type="text/css">

h1 {
	text-align: center;
}


b {
	text-transform: uppercase;
}
			
body {
font-family: sans-serif;
font-style: bold;
width: 100vh; 
height: auto;
border-style: solid;
}

.classtext{
	margin-left: 10px;
	border-style: ridge;
}

			.button {
					  background-color: dodgerblue; /* Green */
					  border: outset;
					  color: white;
					  padding: 10px 10px;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 14px;
			}
		</style>
</head>
<body>

<div class=""></div>

<?php
session_start();
require('connection.php');
$login = $_SESSION['login'];


	if(isset($_POST['php'])){
		$searchphp = $_SESSION['selected_php'];

	}elseif(isset($_POST['java'])){
		$searchjava = $_SESSION['selected_java'];

	}elseif(isset($_POST['javascript'])){
		$searchjavascript = $_SESSION['selected_javascript'];

	}elseif(isset($_POST['ruby'])){
		$searchruby = $_SESSION['selected_ruby'];

	}elseif(isset($_POST['python'])){
		$searchpython = $_SESSION['selected_python'];

	}elseif(isset($_POST['csharp'])){
		$searchcsharp = $_SESSION['selected_csharp'];

	}elseif(isset($_POST['cplusplus'])){
		$searchcplusplus = $_SESSION['selected_cplusplus'];

	}elseif(isset($_POST['css'])){
		$searchcss = $_SESSION['selected_css'];

	}elseif(isset($_POST['mysql'])){
		$searchmysql = $_SESSION['selected_mysql'];

	}elseif(isset($_POST['oracle'])){
		$searchoracle = $_SESSION['selected_oracle'];

	}elseif(isset($_POST['sqlite'])){
		$searchsqlite = $_SESSION['selected_sqlite'];
	}


	if (isset($searchphp)){
		$found = mysqli_query($conexao,"SELECT nome_empresa, php FROM  empresaconhecimento  WHERE  '$searchphp' >= empresaconhecimento.php ");
			if($searchphp != 0 ){	
				if(mysqli_num_rows($found) > 0){

					?>
					
						<table>
							<tr><h1>Empregos que você pode se cadastrar:
								<?php while($dados= mysqli_fetch_assoc($found)){
										if(empty($nome) || $nome != $dados['nome_empresa']){
											$nome = $dados['nome_empresa'];
											$_SESSION['nome_empresa'] = $nome;
										?>
												
											<td>
												<form action="confirma_cadastro.php" method="post">
												<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em PHP, deseja se cadastrar nela?" ?> </label>
												<input type="submit" class="button"  name="cadastrar" value="Cadastrar">
												</form>
											</td>
										</tr>
									</table>
									<?php
								}
			}
		}
	}
		else {
			header('location:sem_vagas.php');
		}
	}


	if (isset($searchjava)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchjava' >= empresaconhecimento.java ");
		if($searchjava != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
			
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
								<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em JAVA, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
								</form>
							</td>
						</tr>
					</table>
				</form><?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
}


	if (isset($searchjavascript)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchjavascript' >= empresaconhecimento.javascript ");
		if($searchjavascript != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em JAVASCRIPT, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
	}

	if (isset($searchruby)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchruby' >= empresaconhecimento.ruby ");
		if($searchruby != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
								<form action="confirma_cadastro.php" method="post">
									<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em RUBY, deseja se cadastrar nela?" ?></label>
									<input type="submit" class="button" name="cadastrar" value="Cadastrar">
								</form>
							</td>
						</tr>
				</table><?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
	}
	if (isset($searchpython)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchpython' >= empresaconhecimento.python ");
		if($searchpython != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em PYTHON, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
	}

	if (isset($searchcsharp)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchcsharp' >= empresaconhecimento.csharp ");
		if($searchcsharp != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em C#, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
	}

	if (isset($searchcplusplus)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchcplusplus' >= empresaconhecimento.cplusplus ");
		if($searchcplusplus != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em C++, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
	}
	}
	else {
		header('location:sem_vagas.php');
	}
	}
	if (isset($searchcss)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchcss' >= empresaconhecimento.css ");
		if($searchcss != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em CSS, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
				}
			}
		}
		}
	else {
		header('location:sem_vagas.php');
	}
	}
	if (isset($searchmysql)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchmysql' >= empresaconhecimento.mysql ");
		if($searchmysql != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em MYSQL, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
	}
	}
	else {
		header('location:sem_vagas.php');
	}
	}
	if (isset($searchoracle)){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchoracle' >= empresaconhecimento.oracle ");
	if($searchoracle != 0 ){	
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>			
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em ORACLE, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table><?php
			}
		}
	}
}
	else {
		header('location:sem_vagas.php');
	}
	}
	if (isset($searchsqlite)){
		if($searchsqlite != 0 ){
		$found = mysqli_query($conexao,"SELECT * FROM  empresaconhecimento  WHERE  '$searchsqlite' >= empresaconhecimento.sqlite");
	 
		if(mysqli_num_rows($found) > 0){

			?>
				<table>
					<tr>
						<?php while($dados= mysqli_fetch_assoc($found)){
								if(empty($nome) || $nome != $dados['nome_empresa']){
								$nome = $dados['nome_empresa'];
								?>
								
							<td>
							<form action="confirma_cadastro.php" method="post">
								<br><label class="classtext"><?php echo "Empresa <b>",$nome ,"</b> precisa do seu conhecimento em SQLITE, deseja se cadastrar nela?" ?></label>
								<input type="submit" class="button" name="cadastrar" value="Cadastrar">
							</form>
							</td>
						</tr>
				</table>
			<?php
			}
		}
		}
	}
	else {
		header('location:sem_vagas.php');
	}
	}

?>
</body>
</html>