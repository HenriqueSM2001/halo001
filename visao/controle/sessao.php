<?php
	session_start();
if(($_SESSION["online"]) == "online"){
		
}else{
	
	header("location:telaLogin.php");
}
?>