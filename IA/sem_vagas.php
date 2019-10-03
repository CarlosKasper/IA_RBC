<?php
session_start();
require('connection.php');
		$modulo = $_SESSION['modulo'];
		if($modulo == 2){
			?><!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    			<title>Vagas</title>
			</head>
 			<body>
     			<div class="containerindex">
         			<div class="box">
         				<h1 class="text"> Infelizmente nenhuma vaga bate com o seu conhecimento.</h1>
         				<button class="button" onclick="location.href='apresentation.php'">Voltar</button>
         			</div>
     			</div>
			</body>
			</html>
			<?php
		}else	
			header('location:apresentation.php');
?>
