<?php include("../controle/controle_cliente.php") ?>
<?php $id = $_POST['id']; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<?php
//Instanciar classe Cliente - Start	
	
	$obj_cliente = new Cliente();

	$arrayCliente = $obj_cliente->busca($id);
	
	/*echo '<pre>';
	var_dump($arrayCliente);
	echo '<pre>';*/
	
	
//Instanciar classe Cliente - Start	
?>
<body>
	
	
	<form>
		Nome:  <input type="text" name="nome" id="nome" value="<?php echo $arrayCliente[0]['nomeCliente'] ?>"><br>
		Idade: <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente'] ?>">
		<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente'] ?>">
		
		<input type="button" id="atualizabnt" onClick="atualizarxt()" value="Editar">
		<input type="hidden" name="acao" value="update">
		
	
	</form>
	
	<!--<button
			onclick="location.href = '/visao/listarClientes.php';" id="buttonListar" class="float-left submit-button" >Listar
	</button> -->
	<br>

	<input type="button" onClick="telaListar();" value="Listar" >
	
	
	
</body>
</html>