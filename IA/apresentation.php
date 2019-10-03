
<?php
session_start();
	require('connection.php');
	?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
</head>
<body>

<form action="login.php" method="post">
  <div class="container">
    <h1>Login</h1>
    <p>Acesse o job.ia com a sua conta</p>
    <hr>

    <label for="text"><b>Login</b></label>
    <input type="text" placeholder="Digite o login" name="login" required>

    <label for="senha"><b>Senha</b></label>
    <input type="password" placeholder="Digite a senha" name="senha" required>
    <div class="div-select">
	    <select name="modulo" id="modulo">
			<option  value="1">Empresa</option>
			<option value="2">Usuário</option>
      <option value="3">Especialista</option>
		</select>
	</div>
    <hr>

  <div class="container signin">
    <p>Esqueceu a senha?<a href="#">Clique aqui</a>.</p>
  </div>

    <button type="submit" class="registerbtn">Entrar</button>
  </div>

  <div class="container register"> 
    <p>Ainda não é membro?<a href="cadastro.php">Crie Já</p>

  </div>
</form>
</a>
</p></div></form></body></html>
