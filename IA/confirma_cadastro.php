<?php
session_start();
require('connection.php');	
$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$modulo = $_SESSION['modulo'];
	 	if($modulo == 2){

		$searchphp = $_SESSION['selected_php'];

		$searchjava = $_SESSION['selected_java'];

		$searchjavascript = $_SESSION['selected_javascript'];

		$searchruby = $_SESSION['selected_ruby'];

		$searchpython = $_SESSION['selected_python'];

		$searchcsharp = $_SESSION['selected_csharp'];

		$searchcplusplus = $_SESSION['selected_cplusplus'];

		$searchcss = $_SESSION['selected_css'];

		$searchmysql = $_SESSION['selected_mysql'];

		$searchoracle = $_SESSION['selected_oracle'];

		$searchsqlite = $_SESSION['selected_sqlite'];

		$nome_empresa = $_SESSION['nome_empresa'];

		mysqli_query($conexao,"INSERT INTO empresaconhecimento (php, java, javascript, csharp , cplusplus, ruby, python, css ,mysql, oracle , sqlite, nome_empresa) VALUES ('$searchphp', '$searchjava', '$searchjavascript', '$searchcsharp', '$searchcplusplus', '$searchruby', '$searchpython', '$searchcss', '$searchmysql' , '$searchoracle' , '$searchsqlite', '$nome_empresa');");
		header('location:indexuser.php');
	}else{
		header('location:cadastrouser.php');
	}
	

?>