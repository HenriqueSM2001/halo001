<?php include("../controle/controle_usuario.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar os Usuario</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/usuario.js"></script>
</head>
<?php
//Instanciar classe Usuario - Start	
	
	$obj_Usuario = new Usuario();

	$arrayUsuario = $obj_Usuario -> busca();
	
	
//Instanciar classe Usuario - Start	
?>
<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditar();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
	
	<table border="1">
		<tr>
			<td>Nome</td>
			<td>Idade</td>
			<td>sexo</td>
	
			<td>opcoes</td>
			
			
		</tr>
		
		
	
	<?php
	
		foreach($arrayUsuario as $value){
		?>
		<tr>
			<td><?php echo $value['nome'] ?></td>
			<td><?php echo $value['idade'] ?></td>
			<td><?php echo $value['sexo'] ?></td>
			
			<td> <input type="button" onClick="telaEditar(<?php echo $value['ID'] ?>)" value="Editar" > </td>
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