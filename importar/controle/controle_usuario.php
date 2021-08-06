<?php


///Load Modelo - Start
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexao.php");
///Load Modelo - End


class Usuario{
	
	function busca(){
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
			
		//Instrução SQL SELECT - Start
		$sql = 
		"SELECT 
		A.ID as ID,
		A.nome as nome,
		A.idade as idade,
		A.sexo as sexo
		
		FROM 
		usuario A
		
		";

	
		
		$resultado = mysqli_query($conectar,$sql);
		$r = 0;
		while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['ID']     = $dados['ID'];
			$row[$r]['nome']   = $dados['nome'];
			$row[$r]['idade']  = $dados['idade'];
			$row[$r]['sexo']   = $dados['sexo'];

			$r++;
		}
	
		return $row; // emite valor para instancia
	}
	function insere($nome,$idade,$sexo){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlInsert = "
		INSERT INTO usuario(
			nome,
			idade,
			sexo
		) VALUES (
			'".$nome."',
			'".$idade."',
			'".$sexo."');
			";
		
		mysqli_query($conectar,$sqlInsert)or die($resultado = false);
		
		return($sqlInsert);
	}
	
	function update($nome,$idade,$sexo,$ID){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlUpdate = "
		UPDATE usuario
		
		SET
		nome = '".$nome."',
		idade = ".$idade.",
		sexo = '".$sexo."'
		
		WHERE ID =" .$ID;
		;
		
		mysqli_query($conectar,$sqlUpdate)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
		
		return $sqlUpdate;
	}
	function delete($ID){
		$resultado = true;
		
		$obj_con = new ConexaoDB;
		$conectar=$obj_con->con();
		
		//Montar a instrução sql e executar
		$sqlDelete = "
		DELETE FROM usuario
		WHERE ID =" .$ID;
		;
		
		mysqli_query($conectar,$sqlDelete)or die($resultado = false);
	
		if($resultado === false){
			return false;
		}else{
			return true;
		}	
		
		//return $sqlDelete;
		
	} 
}
?>

