<?php

class ConexaoDB{
	
	function con(){
		$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
		//seleciona banco
		mysqli_select_db($conectar,"mvc")or die(mysqli_error());
	
		return $conectar;
	}
}


//modelo - start
	//conexao banco
	//$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
	
	//seleciona banco
	//mysqli_select_db($conectar,"mvc")or die(mysqli_error());
//modelo - end

/*
	$sqli = "SELECT * FROM cliente";
	
	$resultado = mysqli_query($conectar, $sqli);

	while($dados = mysqli_fetch_assoc($resultado)){
		
		echo "nome: ". $dados['nomeCliente'].'<br>';
		echo "idade: ". $dados['idadeCliente'].'<br>';	
	}
*/	
?>