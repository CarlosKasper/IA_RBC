<?php 
session_start();
require('connection.php');

  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $modulo = $_POST['modulo'];

  $verifica = mysqli_query($conexao,"SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha' AND modulo = '$modulo'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location.href='apresentation.php';</script>";
        die();
      }else{
        setcookie("nome",$login);
        if($modulo == 2){
			     header('location:cadastrouser.php');
		    }elseif($modulo == 1){
			     header('location:cadastroempresa.php');
		    }
        else{
          header('location:indexEspecialista.php');
        }

      }
 

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['modulo'] = $modulo;
?>