<?php include("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<body>
	
	
	<form>
		Nome:  <input type="text" name="nome" id="nome"><br>
		Idade: <input type="text" name="idade" id="idade">
		
		<input type="button" id="gravar" onClick="cadastrar();" value="Gravar">
		<input type="hidden" name="acao" value="insere">
	
	</form>
	
	<!--<button
			onclick="location.href = '/visao/listarClientes.php';" id="buttonListar" class="float-left submit-button" >Listar
	</button> -->
	<br>

	<input type="button" onClick="telaListar();" value="Listar" >
	
	
	
</body>
</html>