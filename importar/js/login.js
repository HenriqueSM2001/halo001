// JavaScript Document

function verificar(){
	
		email   = $('#email').val();	
		senha   = $('#senha').val();
		acao    = $('#acao').val();
			
		$.ajax({
		
		type:"POST",
		url:"controle/controle_login.php",
		data:{acao:acao,email:email,senha:senha},
	
		
		success: function(data){
			console.log(data);
			alert('Bem vindo')
			window.location.href = "telaInicial.php";
		}
	});
}
// JavaScript Document// JavaScript Document