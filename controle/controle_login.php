
<?php

///Load Modelo - Start
require_once($_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");
///Load Modelo - End


class Usuario{
	
	function verificar($email,$senha){
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
			
		//Instrução SQL SELECT - Start
		$sql = "SELECT * FROM usuario WHERE email = '".$email."'AND senha = '".$senha."'";
		
		$resultado = mysqli_query($conectar,$sql)or die(mysql_error($conectar));
		$linha     = mysqli_num_rows($resultado);
		
		return $linha;
	}
}
?>
	 
