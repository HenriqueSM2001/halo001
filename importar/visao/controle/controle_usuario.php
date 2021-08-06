<?php


//Modulos - Start
include($_SERVER['DOCUMENT_ROOT']."/controle/controle_Usuario.php");
//Modulos - End


//Recebe Valores - start
$ID        = @$_POST["ID"];
$nome      = @$_POST["nome"];
$idade     = @$_POST["idade"];
$sexo      = @$_POST["sexo"];

$acao         = @$_POST["acao"];
//recebe valores - end

//instanciar classe Usuario - start
$obj_Usuario = new Usuario();
//instanciar classe Usuario - end

if($acao == "insere"){
	
	//chama metodo - Start
	$result = $obj_Usuario->insere($nome,$idade,$sexo);
	echo $result;
	//Chama metodo - End

}
elseif($acao == "update"){
	
	//chama metodo - Start
	$result = $obj_Usuario->update($nome,$idade,$sexo,$ID);
	//echo $result;
	//Chama metodo - End
	
}
elseif($acao == "delete"){
	
	//chama metodo - Start
	$result = $obj_Usuario->delete($ID);
	//echo $result;
	//Chama metodo - End
	
}
?>
