<?php include("../controle/controle_login.php") ?>
<!doctype html>
<html>
<head>
<title> Login </title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/usuario.js"></script>
	
</head>
<body>
<form method="POST">
	
		<label>Email:
			</label><input type="email" name="email" id="email"><br>
		<label>Senha:
			</label><input type="password" name="senha" id="senha"><br>
	
		<input type="button" onClick="verificar();" value="login" >
		<input type="hidden" name="acao" id="acao" value="log">
	
</form>
</body>
</html>
