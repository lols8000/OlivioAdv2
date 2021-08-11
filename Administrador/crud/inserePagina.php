<?php

//Iniciando sessão
session_start();

//Insere informações no banco de dados
function insere($tabela, $btn, $titulo, $texto, $nomeImg){
	global $connect;
	$sql =  "SELECT * FROM $tabela WHERE botao = '$btn'";
	$resultado = mysqli_query($connect, $sql);	
	$dados = mysqli_fetch_array($resultado);
	
	//Veifica se há algum texto cadastrado se estiver apenas faz um update caso contrário cria um campo novo
	if($dados['botao'] == $btn):
		$sql = "UPDATE $tabela SET titulo = '$titulo', texto ='$texto', imagem = '$nomeImg' WHERE botao='$btn'";
	else:
		$sql = "INSERT INTO $tabela(botao, imagem, titulo, texto) VALUES ('$btn', '$nomeImg', '$titulo', '$texto')";
	endif;
	
	//Mensagem
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		
		//Envia para a página que solicitou após o inserção no banco 
		switch ($tabela) {
			case 'pag_principal':
				header('Location: ../index_adm.php?pagina=principal');
				break;
			case 'pag_sobre':
				header('Location: ../index_adm.php?pagina=sobre');
				break;
			case 'pag_areasatuacao':
				header('Location: ../index_adm.php?pagina=areasAtuacao');
				break;	
		}		
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		
		//Envia para a página que solicitou após o inserção no banco
		switch ($tabela) {
			case 'pag_principal':
				header('Location: ../index_adm.php?pagina=principal');
				break;
			case 'pag_sobre':
				header('Location: ../index_adm.php?pagina=sobre');
				break;
			case 'pag_areasatuacao':
				header('Location: ../index_adm.php?pagina=areasAtuacao');
				break;
		}
	endif;
}

?>