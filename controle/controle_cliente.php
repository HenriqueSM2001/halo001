<?php


///Load Modelo - Start
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");
///Load Modelo - End


class Cliente{
	
	function busca(){
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
			
		//Instrução SQL SELECT - Start
		$sql = 
		"SELECT 
		A.ID as ID,
		A.nome as nome,
		A.idade as idade,
		B.sexo as sexo,
		C.NomeCidade as NomeCidade,
		D.NomeEstado as NomeEstado,
		E.NomePais as NomePais
		
		FROM 
		cliente A,
		sexo B,
		cidade C,
		estado D,
		pais E
		
		WHERE
		A.sexo = B.ID AND
		A.cidade = C.ID AND
		A.estado = D.ID AND
		A.pais = E.ID
		";
	
		
		$resultado = mysqli_query($conectar,$sql);
		$r = 0;
		while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['ID']     = $dados['ID'];
			$row[$r]['nome']   = $dados['nome'];
			$row[$r]['idade']  = $dados['idade'];
			$row[$r]['sexo']   = $dados['sexo'];
			$row[$r]['NomeCidade'] = $dados['NomeCidade'];
			$row[$r]['NomeEstado'] = $dados['NomeEstado'];
			$row[$r]['NomePais']   = $dados['NomePais'];
			
			$r++;
		}
	
		
		return $row; // emite valor para instancia
	}
	function insere($nome,$idade,$sexo,$cidade,$estado,$pais){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlInsert = "
		INSERT INTO cliente (
			nome,
			idade,
			sexo,
			cidade,
			estado,
			pais
		) VALUES (
			'".$nome."',
			'".$idade."',
			'".$sexo."',
			'".$cidade."',
			'".$estado."',
			'".$pais."');
			";
		
		mysqli_query($conectar,$sqlInsert)or die($resultado = false);
		
		return($sqlInsert);
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
	function delete($ID){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlDelete = "
		DELETE FROM cliente
		WHERE ID =" .$ID;
		;
		
		mysqli_query($conectar,$sqlDelete)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
		
	}
	
		function buscarSexo(){
	
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlselect = "
		select *
		FROM sexo";
		
		$resultado=mysqli_query($conectar,$sqlselect)or die($resultado = false);
		$resultado=$resultado->fetch_all(MYSQLI_ASSOC);
		//while($dados = mysqli_fetch_assoc($resultado)){
		//	$row[$r]['ID']     = $dados['ID'];
		//	$row[$r]['sexo']   = $dados['sexo'];
		return $resultado;
		
			
		}
			function buscarCidade(){
	
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlselect = "
		select *
		FROM cidade";
		
		$resultado=mysqli_query($conectar,$sqlselect)or die($resultado = false);
		$resultado=$resultado->fetch_all(MYSQLI_ASSOC);
		
		return $resultado;
		
	}
			function buscarEstado(){
	
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlselect = "
		select *
		FROM estado";
		
		$resultado=mysqli_query($conectar,$sqlselect)or die($resultado = false);
		$resultado=$resultado->fetch_all(MYSQLI_ASSOC);
		
		return $resultado;
		
	}
			function buscarPais(){
	
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlselect = "
		select *
		FROM pais";
		
		$resultado=mysqli_query($conectar,$sqlselect)or die($resultado = false);
		$resultado=$resultado->fetch_all(MYSQLI_ASSOC);
		
		return $resultado;
		
	}
} 

?>

