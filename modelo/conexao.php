<?php

class ConexaoDB{
	
	function con(){
		$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
		//seleciona banco
		mysqli_select_db($conectar,"locadora")or die(mysqli_error());
	
		return $conectar;
	}
}

?>