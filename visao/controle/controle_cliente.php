<?php


//Modulos - Start
include($_SERVER['DOCUMENT_ROOT']."/controle/controle_cliente.php");
//Modulos - End


//Recebe Valores - start
$id        = @$_POST["id"];
$nome      = @$_POST["nome"];
$idade     = @$_POST["idade"];
$sexo      = @$_POST["sexo"];
$cidade    = @$_POST["cidade"];
$estado    = @$_POST["estado"];
$pais      = @$_POST["pais"];

$acao         = @$_POST["acao"];
//recebe valores - end

//instanciar classe cliente - start
$obj_cliente = new Cliente();
//instanciar classe cliente - end

if($acao == "insere"){
	
	//chama metodo - Start
	$result = $obj_cliente -> insere($nome,$idade,$sexo,$cidade,$estado,$pais);
	echo $result;
	//Chama metodo - End

}
elseif($acao == "update"){
	
	//chama metodo - Start
	$result = $obj_cliente -> update($nome,$idade,$sexo,$cidade,$estado,$pais);
	//Chama metodo - End
	
}
elseif($acao == "delete"){
	
	//chama metodo - Start
	$result = $obj_cliente -> delete($id);
	//Chama metodo - End
	
}
?>
