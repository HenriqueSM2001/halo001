<?php

//Modulos - Start
include("../../controle/controle_cliente.php");
//Modulos - End


//Recebe Valores - start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];
//recebe valores - end

//instanciar classe cliente - start
$obj_cliente = new Cliente();
//instanciar classe cliente - end

if($acao == "insere"){
	
	//chama metodo - Start
	$result = $obj_cliente -> insere($nomeCliente, $idadeCliente);
	//Chama metodo - End
	
	//Voltar a tela do formulario
	if($result === true){

	}else{
	
	}
}
elseif($acao == "update"){
	
	//chama metodo - Start
	$result = $obj_cliente -> update($nomeCliente, $idadeCliente, $idCliente);
	//Chama metodo - End
	
	//Voltar a tela do formulario
	if($result === true){
	
	}else{
		
	}
}
elseif($acao == "delete"){
	
	//chama metodo - Start
	$result = $obj_cliente -> delete($idCliente);
	//Chama metodo - End
	
	//Voltar a tela do formulario
	
}