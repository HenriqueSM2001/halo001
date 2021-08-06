<?php include("../controle/controle_usuario.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edição</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/usuario.js"></script>
</head>
<?php
//Instanciar classe  Usuario - Start	
	$ID = 3;
	$obj_Usuario = new Usuario();

	$arrayUsuario = $obj_Usuario->busca($ID);
	
//Instanciar classe  Usuario - Start	
?>
<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditar();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
	
	<form>
		
		Nome:  <input type="text" name="nome" id="nome" value="<?php echo $arrayUsuario[0]['nome'] ?>"><br>
		Idade: <input type="text" name="idade" id="idade" value="<?php echo $arrayUsuario[0]['idade'] ?>"><br>
		sexo:  <input type="text" name="sexo" id="sexo" value="<?php echo $arrayUsuario[0]['sexo'] ?>"><br>

		<input type="hidden" name="ID" id="ID" value="<?php echo $arrayUsuario[0]['ID'] ?>">
		
		<input type="button" id="atualizabnt" onClick="atualizarxt()" value="Atualizar">
		<input type="hidden" name="acao" value="update">
		
	
	</form>
	<br>
	
</body>
</html>