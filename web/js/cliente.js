// JavaScript Document

function telaListar(){
	
	//console.log('Foi para a tela de Cadastro');
	window.location.href = 'listarClientes.php';
}
function telaCadastrar(){
	
	//console.log('Foi para a tela de Cadastro');
	window.location.href = 'formCadastro.php';
}



function  telaEditar(valor){
	
	//window.location.href = 'formEditarCadastro.php?id='+valor;
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function atualizarxt(){
	
		id    = $('#id').val();	
		nome  = $('#nome').val();
		idade = $('#idade').val();
			
		$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"update",nome:nome,idade:idade,id:id},
		
		
		success: function(data){
			console.log("Atualizado")
			alert('O cliente foi atualizado')
			telaListar();
			}
		
	})
}

function cadastrar(){
		
		nome= $('#nome').val();
		idade= $('#idade').val();
		
	
		//javascript puro
		//var nome= document.getElementById("nome");
		//var idade= document.getElementById("idade");
	
		$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade},
		
		
		success: function(data){
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
			window.location.href="listarClientes.php";
			
			}
		
	});
	}
	
	
	//console.log(valor);
}