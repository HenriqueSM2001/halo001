// JavaScript Document

function telaCadastrar(){
	
	//console.log('Foi para a tela de Cadastro');
	window.location.href = 'telaCadastro.php';
}

function telaEditar(){
	
	window.location.href = 'telaEditar.php';
	}

function telaListar(){
	
	window.location.href = 'telaListar.php';
}

function  telaEditarxt(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function atualizarxt(){
	
		ID     = $('#ID').val();
		nome     = $('#nome').val();
		idade    = $('#idade').val();
		sexo     = $('#sexo').val();
	
		$.ajax({
		
		type:"POST",
		url:"controle/controle_usuario.php",
		data:{acao:"update",nome:nome,idade:idade,sexo:sexo,ID:ID},
		
		
		success: function(data){
			console.log(data);
			console.log("Atualizado")
			alert('O Usuario foi atualizado')
			telaListar();
			}
		
	})
}

function cadastrar(){
		
		nome     = $('#nome').val();
		idade    = $('#idade').val();
		sexo     = $('#sexo').val();

		$.ajax({
		
		type:"POST",
		url:"controle/controle_usuario.php",
		data:{acao:"insere",nome:nome,idade:idade,sexo:sexo},
		
		
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
		url:"controle/controle_usuario.php",
		data:{acao:"delete",ID:valor},
		
		
		success: function(data){
			//console.log(data);
			console.log("deletado");
			alert('O usuario foi deletado')
			window.location.href="telaInicial.php";
			
			}
	});
	}

	//console.log(valor);
}