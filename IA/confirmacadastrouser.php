<?php
session_start();
require('connection.php');
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$modulo = $_SESSION['modulo'];
 	if($modulo == 2){
			    
		$selected_php = $_POST['php'];  				$_SESSION['selected_php'] = $selected_php; 

		$selected_java = $_POST['Java'];  			 	$_SESSION['selected_java'] = $selected_java; 

		$selected_ruby = $_POST['Ruby'];			 	$_SESSION['selected_ruby'] = $selected_ruby; 

		$selected_css = $_POST['CSS']; 					$_SESSION['selected_css'] = $selected_css; 

		$selected_python = $_POST['Python'];			$_SESSION['selected_python'] = $selected_python; 

		$selected_oracle = $_POST['Oracle'];			$_SESSION['selected_oracle'] = $selected_oracle; 

		$selected_mysql = $_POST['MySql']; 				$_SESSION['selected_mysql'] = $selected_mysql; 

		$selected_csharp = $_POST['C#']; 				$_SESSION['selected_csharp'] = $selected_csharp; 

		$selected_javascript = $_POST['JavaScript']; 	$_SESSION['selected_javascript'] = $selected_javascript; 

		$selected_cplusplus = $_POST['C++']; 			$_SESSION['selected_cplusplus'] = $selected_cplusplus; 

		$selected_sqlite = $_POST['SqLite']; 			$_SESSION['selected_sqlite'] = $selected_sqlite; 

		$nome_user = $login;

		mysqli_query($conexao,"INSERT INTO userconhecimento (php, java, javascript, csharp , cplusplus, ruby, python, css ,mysql, oracle , sqlite, nome_user)
							   VALUES ('$selected_php', '$selected_java', '$selected_javascript', '$selected_csharp', '$selected_cplusplus', '$selected_ruby', '$selected_python', '$selected_css', '$selected_mysql' , '$selected_oracle' , '$selected_sqlite', '$nome_user');");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
		<title>Escolher Linguagem</title>
	</head>
	<body> 
		<h3>Escolha qual linguagem você tem mais gosto de trabalhar.</h3>
		<table>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta programar de Web?</label>
						<input type="submit" class="buttoncadastro" value="PHP" name="php">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar aplicativos para computadores?</label>
						<input type="submit" class="buttoncadastro" value="Java" name="java">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta programar de Web?</label>
						<input type="submit"class="buttoncadastro" value="JavaScript" name="javascript">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar aplicativos para computadores?</label>
						<input type="submit"class="buttoncadastro" value="C#" name="csharp">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar em C++?</label>
						<input type="submit"class="buttoncadastro" value="C++" name="cplusplus">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar em Ruby?</label>
						<input type="submit"class="buttoncadastro" value="Ruby" name="ruby">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar aplicativos inteligentes?</label>
						<input type="submit"class="buttoncadastro" value="Python" name="python">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta de programar frontend de uma página web?</label>
						<input type="submit"class="buttoncadastro" value="Css" name="css">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta utilizar banco de dados?</label>
						<input type="submit"class="buttoncadastro" value="MySql" name="mysql">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta utilizar banco de dados?</label>
						<input type="submit"class="buttoncadastro" value="Oracle" name="oracle">
					</form><br>
				</td>
			</tr>
			<tr>
				<td>
					<form action="pesquisaempresa.php" method="post">
						<label>Gosta utilizar banco de dados para serviços mobile?</label>
						<input type="submit"class="buttoncadastro" value="SqLite" name="sqlite">
					</form><br>
				</td>
			</tr>
		</table>
	</body>
</html>
	<?php

	}else{
		header('location:cadastroempresa.php');
	}
	?>