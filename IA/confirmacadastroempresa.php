<?php
session_start();
require('connection.php');
 

		$login = $_SESSION['login'];

		$senha = $_SESSION['senha'];

		$modulo = $_SESSION['modulo'];

		$selected_php = $_POST['php'];

		$selected_java = $_POST['Java'];

		$selected_ruby = $_POST['Ruby'];

		$selected_css = $_POST['CSS'];

		$selected_python = $_POST['Python'];

		$selected_oracle = $_POST['Oracle'];

		$selected_mysql = $_POST['MySql'];

		$selected_csharp = $_POST['C#'];

		$selected_javascript = $_POST['JavaScript'];

		$selected_cplusplus = $_POST['C++'];

		$selected_sqlite = $_POST['SqLite'];

		$nome_empresa = $login;


		mysqli_query($conexao,"INSERT INTO empresaconhecimento (php, java, javascript, csharp , cplusplus, ruby, python, css ,mysql, oracle , sqlite, nome_empresa) VALUES ('$selected_php', '$selected_java', '$selected_javascript', '$selected_csharp', '$selected_cplusplus', '$selected_ruby', '$selected_python', '$selected_css', '$selected_mysql' , '$selected_oracle' , '$selected_sqlite', '$nome_empresa');");

		header('location:indexempresa.php');
	

	?>