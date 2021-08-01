// JavaScript Document

function telaCadastrar(){
	
	//console.log('Foi para a tela de Cadastro');
	window.location.href = 'telaCadastro.php';
}

function telaEditarbnt(){
	
	window.location.href = 'telaEditar.php';
	}

function telaListar(){
	
	window.location.href = 'telaListar.php';
}

function Home(){
	
	window.location.href = 'telaPrincipal.php';
}


function  telaEditarxt(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function atualizarxt(){
	
		nome     = $('#nome').val();
		idade    = $('#idade').val();
		sexo     = $('#sexo').val();
		cidade   = $('#cidade').val();
		estado   = $('#estado').val();
		pais     = $('#pais').val();
			
		$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"update",nome:nome,idade:idade,sexo:sexo,cidade:cidade,estado:estado,pais:pais,id:id},
		
		
		success: function(data){
			console.log("Atualizado")
			alert('O cliente foi atualizado')
			telaListar();
			}
		
	})
}

function cadastrar(){
		
		nome     = $('#nome').val();
		idade    = $('#idade').val();
		sexo     = $('#sexo').val();
		cidade   = $('#cidade').val();
		estado   = $('#estado').val();
		pais     = $('#pais').val();

		$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade,sexo:sexo,cidade:cidade,estado:estado,pais:pais},
		
		
		success: function(data){
			console.log(data);
			console.log("Cadastrado")
			alert('Cadastrado')
			telaListar();
			}
		
	})
}



function deletar(valor){
	
	var confirmacao=confirm("Voce tem certeza?");

	if(confirmacao == true){
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"delete",id:valor},
		
		
		success: function(data){
			console.log("deletado");
			alert('O cliente foi deletado')
			window.location.href="telaPrincipal.php";
			
			}
	});
	}

	//console.log(valor);
}