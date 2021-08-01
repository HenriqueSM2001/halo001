<?php include("controle/sessao.php");?>
<?php include("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cadastro</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
	<?php
	

//Instanciar classe Cliente - Start	
	
	$obj_cliente = new Cliente();

	$arraySexo = $obj_cliente->buscarSexo();
	$arrayCidade = $obj_cliente->buscarCidade();
	$arrayEstado = $obj_cliente->buscarEstado();
	$arrayPais = $obj_cliente->buscarPais();
//Instanciar classe Cliente - Start	
	?>
<body>
	<input type="button"  onClick="telaListar();"    value="Listar" >
	
	<input type="button"  onClick="telaEditarbnt();"    value="Editar" >
 
	<input type="button"  onClick="telaCadastrar();" value="Cadastrar" >
	
	<input type="button"  onClick="Home();" value="Home" >
		
	<form>
		Nome     : <input type="text" name="nome"  id="nome" ><br>
		Idade    : <input type="text" name="idade" id="idade" ><br>
		sexo     :<select id='sexo' name="sexo">
			<?php
			foreach ($arraySexo as $value){
			?>
				<option value="<?php echo $value['ID'] ?>"> <?php echo $value['sexo'] ?></option>
			
			<?php }?>
		</select><br>
		
		cidade    :<select id='cidade' name="cidade">
			<?php
			foreach($arrayCidade as $value){
			?>
				<option value="<?php echo $value['ID'] ?>"> <?php echo $value['NomeCidade'] ?></option>
			
			<?php }?>
		</select><br>
		
		
		estado    :<select id='estado' name="estado">
			<?php
			foreach ($arrayEstado as $value){
			?>
				<option value="<?php echo $value['ID'] ?>"> <?php echo $value['NomeEstado'] ?></option>
			
			<?php }?>
		</select><br>
	
		
		pais    :<select id='pais' name="pais">
			<?php
			foreach($arrayPais as $value){
			?>
				<option value="<?php echo $value['ID'] ?>"> <?php echo $value['NomePais'] ?></option>
			
			<?php }?>
		</select><br>
		
		
		<input type="button" onClick="cadastrar()" value="cadastrar">
		<input type="hidden" name="acao" value="insere">

	</form>
	<br>
	<input type="button" onClick="telaListar();" value="Listar" >
	
	
	
</body>
</html>