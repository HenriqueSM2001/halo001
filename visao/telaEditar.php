<?php include("controle/sessao.php");?>
<?php include("../controle/controle_cliente.php") ?>
<?php //$id = $_POST['id']; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edição</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<?php
//Instanciar classe Cliente - Start	
	$ID = 3;
	$obj_cliente = new Cliente();

	$arrayCliente = $obj_cliente->busca($ID);
	
	/*echo '<pre>';
	var_dump($arrayCliente);
	echo '<pre>';*/
	
	
//Instanciar classe Cliente - Start	
?>
<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditarbnt();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
	
	<input type="button"  onClick="Home();" value="Home" >
	
	<form>
		Nome:  <input type="text" name="nome" id="nome" value="<?php echo $arrayCliente[0]['nome'] ?>"><br>
		Idade: <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idade'] ?>">
		sexo:  <input type="text" name="sexo" id="sexo" value="<?php echo $arrayCliente[0]['sexo'] ?>"><br>
		cidade:  <input type="text" name="cidade" id="cidade" value="<?php echo $arrayCliente[0]['NomeCidade'] ?>"><br>
		estado:  <input type="text" name="estado" id="estado" value="<?php echo $arrayCliente[0]['NomeEstado'] ?>"><br>
		pais:  <input type="text" name="pais" id="pais" value="<?php echo $arrayCliente[0]['NomePais'] ?>"><br>
		<input type="hidden" name="ID" id="ID" value="<?php echo $arrayCliente[0]['ID'] ?>">
		
		<input type="button" id="atualizabnt" onClick="atualizarxt()" value="Editar">
		<input type="hidden" name="acao" value="update">
		
	
	</form>
	<br>

	<input type="button" onClick="telaListar();" value="Listar" >
	
	
	
</body>
</html>