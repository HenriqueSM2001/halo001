<?php

///Load Modelo - Start
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");
///Load Modelo - End
/*
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];

$acao         = $_POST["acao"];



if($acao == "insere"){
	
	$sqlInsert = "INSERT INTO cliente (nomeCliente, idadeCliente) values ('".$nomeCliente."', '".$idadeCliente."')";
	mysqli_query($conectar,$sqlInsert);
	
	echo "Cliente cadastrado com sucesso!";
	
}else if($acao == "editar"){
	
	echo 'UPDATE';
	
}else if($acao == "busca"){
	
	$sqli = "SELECT * FROM cliente";
	
	$resultado = mysqli_query($conectar, $sqli);
	echo 'SELECT';
	
}else if($acao == "deletar"){
	
	echo 'DELETE';
	
}



*/

class Cliente{
	
	function busca($id = false){
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
			
		//Instrução SQL SELECT - Start
		$sql = "SELECT * FROM cliente ";
		if($id>0){
			$sql .= "WHERE idCliente = ".$id;
		}
		
		$resultado = mysqli_query($conectar,$sql);
		$r = 0;
		while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['idCliente'] = $dados['idCliente'];
			$row[$r]['nomeCliente'] = $dados['nomeCliente'];
			$row[$r]['idadeCliente'] = $dados['idadeCliente'];
			$r++;
		}
		//$resultado = 'mostra clientes';
		//instrução SQL SELECT - End
		//Popular variavel
		
		return $row; // emite valor para instancia
	}
	function insere($nome, $idade){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlInsert = "
		INSERT INTO cliente (
			nomeCliente,
			idadeCliente
		) VALUES (
			'".$nome."',
			".$idade.");
			";
		
		mysqli_query($conectar,$sqlInsert)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}	
	}
	function update($nome, $idade, $id){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlUpdate = "
		UPDATE cliente
		SET nomeCliente = '".$nome."',
		idadeCliente = ".$idade." 
		WHERE idCliente =" .$id;
		;
		
		mysqli_query($conectar,$sqlUpdate)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}	
	}
	function delete($id){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlDelete = "
		DELETE FROM cliente
		WHERE idCliente =" .$id;
		;
		
		mysqli_query($conectar,$sqlDelete)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}	
	}
	
}


?>
