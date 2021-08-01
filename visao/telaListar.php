<?php include("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar os Clientes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<?php
//Instanciar classe Cliente - Start	
	
	$obj_cliente = new Cliente();

	$arrayClientes = $obj_cliente -> busca();
	
	
//Instanciar classe Cliente - Start	
?>
<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditarbnt();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
	
	<input type="button"  onClick="Home();" value="Home" >
	
	<table border="1">
		<tr>
			<td>Nome</td>
			<td>Idade</td>
			<td>sexo</td>
			<td>cidade</td>
			<td>estado</td>
			<td>pais</td>
			<td>opcoes</td>
			
			
		</tr>
		
		
	
	<?php
	
		foreach($arrayClientes as $value){
		?>
		<tr>
			<td><?php echo $value['nome'] ?></td>
			<td><?php echo $value['idade'] ?></td>
			<td><?php echo $value['sexo'] ?></td>
			<td><?php echo $value['NomeCidade'] ?></td>
			<td><?php echo $value['NomeEstado'] ?></td>
			<td><?php echo $value['NomePais'] ?></td>
			<td> <input type="button" onClick="telaEditarbnt(<?php echo $value['ID'] ?>)" value="Editar" > </td>
			<td> <input type = "button" onClick = "deletar(<?php echo $value['ID'] ?>);" value = "Apagar"/> </td>
		</tr>
		<?php	
		}
	?>
	</table>
	<br>
	
	<input type="button" onClick="telaCadastrar()" value="Cadastrar" >

	<form id="formulario" action="telaEditar.php" method="POST">
		<input type="hidden" id="idFormulario" name="id"></input>
	</form>
	
	
	
</body>
</html>