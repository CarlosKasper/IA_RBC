<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Empresa</title>
	<style type="text/css">
					/* Customize the label (the container) */
			.container {
			  display: block;
			  position: relative;
			  padding-left: 35px;
			  margin-bottom: 12px;
			  cursor: pointer;
			  font-size: 18px;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
			}

			/* Hide the browser's default radio button */
			.container input {
			  position: absolute;
			  opacity: 0;
			  cursor: pointer;
			  height: 0;
			  width: 0;
			}

			/* Create a custom radio button */
			.checkmark {
			  position: absolute;
			  top: 0;
			  left: 0;
			  height: 25px;
			  width: 25px;
			  background-color: #eee;
			  border-radius: 60%;
			}

			/* On mouse-over, add a grey background color */
			.container:hover input ~ .checkmark {
			  background-color: #ccc;
			}

.contorno {
  width: auto;
  height: auto;
  border-style: solid;
  }
			/* When the radio button is checked, add a blue background */
			.container input:checked ~ .checkmark {
			  background-color: #2196F3;
			}

			/* Create the indicator (the dot/circle - hidden when not checked) */
			.checkmark:after {
			  content: "";
			  position: absolute;
			  display: none;
			}

			/* Show the indicator (dot/circle) when checked */
			.container input:checked ~ .checkmark:after {
			  display: block;
			}

			/* Style the indicator (dot/circle) */
			.container .checkmark:after {
			  top: 9px;
			  left: 9px;
			  width: 8px;
			  height: 8px;
			  border-radius: 50%;
			  background: white;
			}
			.button {
					  background-color: dodgerblue; /* Green */
					  border: none;
					  color: white;
					  padding: 15px 85px;
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
		$senha = $_SESSION['senha'];
		$modulo = $_SESSION['modulo'];
		if($modulo == 1){
	?>
	<h1 align="center">Bem vindo <?php echo $login ?></h1>
	<form class="form" action="confirmacadastroempresa.php" method="post">
		<div class="contorno">
		<table>
			<h1><label class="container">Conhecimentos com linguagens de programação</label></h1>

			<tr>
				<td><label class="container">PHP :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="php" id="php" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">PHP - BASIC<input type="radio" name="php" id="php" value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">PHP - INTERMEDIATE<input type="radio" name="php" id="php" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">PHP - ADVANCED<input type="radio" name="php" id="php" value="3"><span class="checkmark"></span></label></td>
			</tr>
			<tr>
				<td><label class="container">Java :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="Java" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">Java - BASIC<input type="radio" name="Java"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">Java - INTERMEDIATE<input type="radio" name="Java" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">Java - ADVANCED<input type="radio" name="Java" value="3"><span class="checkmark"></span></label></td>
				
			</tr>

			<tr>
				<td><label class="container">Ruby :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="Ruby" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">Ruby - BASIC<input type="radio" name="Ruby"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">Ruby - INTERMEDIATE<input type="radio" name="Ruby" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">Ruby - ADVANCED<input type="radio" name="Ruby" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><label class="container">C# :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="C#" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">C# - BASIC<input type="radio" name="C#"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">C# - INTERMEDIATE<input type="radio" name="C#" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">C# - ADVANCED<input type="radio" name="C#" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><label class="container">JavaScript :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="JavaScript" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">JavaScript - BASIC<input type="radio" name="JavaScript"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">JavaScript - INTERMEDIATE<input type="radio" name="JavaScript" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">JavaScript - ADVANCED<input type="radio" name="JavaScript" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><label class="container">CSS :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="CSS" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">CSS - BASIC<input type="radio" name="CSS"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">CSS - INTERMEDIATE<input type="radio" name="CSS" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">CSS - ADVANCED<input type="radio" name="CSS" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><label class="container">Python :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="Python" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">Python - BASIC<input type="radio" name="Python"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">Python - INTERMEDIATE<input type="radio" name="Python" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">Python - ADVANCED<input type="radio" name="Python" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><label class="container">C++ :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="C++" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">C++ - BASIC<input type="radio" name="C++"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">C++ - INTERMEDIATE<input type="radio" name="C++" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">C++ - ADVANCED<input type="radio" name="C++" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td><h1><label class="container">Conhecimentos com Banco de Dados</label></h1></td>
			</tr>

			<tr>
				<td><label class="container">MySql :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="MySql" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">MySql - BASIC<input type="radio" name="MySql"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">MySql - INTERMEDIATE<input type="radio" name="MySql" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">MySql - ADVANCED<input type="radio" name="MySql" value="3"><span class="checkmark"></span></label></td>
			</tr>
			
			<tr>
				<td><label class="container">Oracle :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="Oracle" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">Oracle - BASIC<input type="radio" name="Oracle"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">Oracle - INTERMEDIATE<input type="radio" name="Oracle" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">Oracle - ADVANCED<input type="radio" name="Oracle" value="3"><span class="checkmark"></span></label></td>
			</tr>
		
			<tr>
				<td><label class="container">SqLite :</label></td>
				<td><label class="container">NO KNOWLEDGE<input type="radio" checked="checked" name="SqLite" value="0"><span class="checkmark"></span></label></td>
				<td><label class="container">SqLite - BASIC<input type="radio" name="SqLite"  value="1"><span class="checkmark"></span></label></td>
				<td><label class="container">SqLite - INTERMEDIATE<input type="radio" name="SqLite" value="2"><span class="checkmark"></span></label></td>
				<td><label class="container">SqLite - ADVANCED<input type="radio" name="SqLite" value="3"><span class="checkmark"></span></label></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><p align="right"><input type="submit" class="button" value="ENVIAR"></td>
			</tr>
		</table>
	</div>
	</form>
	
</body>
</html>
<?php
}
else{
	header('location:apresentation.php');
}
?>