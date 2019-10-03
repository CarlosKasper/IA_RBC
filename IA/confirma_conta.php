<?php 
session_start();
require('connection.php');
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha1 = $_POST['senha1'];
$modulo = $_POST['modulo'];
if($senha  == $senha1){
mysqli_query($conexao,"INSERT INTO usuario (nome, senha, modulo) VALUES ('$login', '$senha', '$modulo');");
 

$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
$_SESSION['modulo'] = $modulo;
	if($modulo == 2){
		header('location:cadastrouser.php');
	}else{
		header('location:cadastroempresa.php');
	}
}else{
	echo"<script language='javascript' type='text/javascript'>
        alert('Senhas não conferem!');window.location.href='cadastro.php';</script>";
}
?>