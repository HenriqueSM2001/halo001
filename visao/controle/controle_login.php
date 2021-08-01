<?php

//Modulos - Start
include("../../controle/controle_login.php");
//Modulos - End

//Recebe Valores - start
$senha  = $_POST["senha"];
$email = $_POST["email"];

$acao         = $_POST["acao"];
//Recebe Valores - End


//instanciar classe usuario - start
$obj_Usuario = new Usuario();
//instanciar classe usuario - end

if($acao == "log"){
	
	//chama metodo - Start
	$result = $obj_Usuario -> verificar($email, $senha);
	//Chama metodo - End
	
	session_start();
		
	if($result>0){
		
		$_SESSION["online"] = "online";
		
	}else{
		
		$_SESSION["online"] = "offline";
	}

}

?>