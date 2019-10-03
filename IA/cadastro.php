<?php 
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
</head>
<body>


<form action="confirma_conta.php" method="post">
  <div class="container">
    <h1>Cadastro</h1>
    <p>Por favor, preencha este formulário para criar uma conta.</p>
    <hr>

    <label for="text"><b>Login</b></label>
    <input type="text" placeholder="Digite o login" name="login" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Digite a senha" name="senha" required>

    <label for="psw-repeat"><b>Repita a senha</b></label>
    <input type="password" placeholder="Repita a senha" name="senha1" required>
    <div class="div-select">
	    <select name="modulo" id="modulo">
			<option  value="1">Empresa</option>
			<option value="2">Usuário</option>
		</select>
	</div>
    <hr>
    <p>Ao criar uma conta, você concorda com nossa <a href="#">Termos & Privacidade</a>.</p>

    <button type="submit" class="registerbtn">Registrar</button>
  </div>
  
  <div class="container signin">
    <p>Já tem uma conta? <a href="apresentation.php">Entre aqui</a>.</p>
  </div>
</form>

</body>
</html>
