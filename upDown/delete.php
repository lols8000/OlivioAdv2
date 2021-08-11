<?php

//Iniciando sessão
session_start();

//conexão
require '..\includes\db_connect.php';

//clear
function clear($input){
	global $connect;
	
	//sql
	$var = mysqli_escape_string($connect, $input);
	
	//xss
	$var = htmlspecialchars($var);
	return $var;
}

//Deleta o arquivo do servidor
function deleteArquivo($id){
	
	global $connect;
	
	$sql = "SELECT * FROM arquivos WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$arquivo = mysqli_fetch_array($resultado);

	$nomeArquivo = $arquivo['nome'];
	$caminhoArquivo = $arquivo['caminho'];

	return unlink("$caminhoArquivo"."$nomeArquivo");
}

$id = clear($_GET['id']);
$tipo = $_SESSION['tipo'];

//Apaga do banco de dados se o id for diferente de nulo
if(!is_null($id)):

	if(deleteArquivo($id)):

		$sql = "DELETE FROM arquivos WHERE id = '$id'";

		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Deletado do banco de dados com sucesso!";
			
			if($tipo == 'USER'):
				header('Location: ../areaClientes/index.php?p=documentos');
			elseif($tipo == 'ADM'):
				header('Location: ../Administrador/index_adm.php?pagina=documentos');
			endif;
		
		else:
			$_SESSION['mensagem'] = "Erro ao deletar do banco de dados";

			if($tipo == 'USER'):
				header('Location: ../areaClientes/index.php?p=documentos');
			elseif($tipo == 'ADM'):
				header('Location: ../Administrador/index_adm.php?pagina=documentos');
			endif;
		endif;
	else:
		$_SESSION['mensagem'] = "Erro ao deletar o arquivo do servidor";			
	endif;
endif;

?>