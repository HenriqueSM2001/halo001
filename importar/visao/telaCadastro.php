<?php include("../controle/controle_usuario.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cadastro</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/usuario.js"></script>
</head>

<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditar();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
		
	<form>
		Nome     : <input type="text" name="nome"  id="nome"  ><br>
		Idade    : <input type="text" name="idade" id="idade" ><br>
		sexo     : <input type="text" name="sexo"  id="sexo"   ><br>
		
		<input type="button" onClick="cadastrar()" value="inserir">
		<input type="hidden" name="acao" value="insere">

	</form>
	<br>	
</body>
</html>