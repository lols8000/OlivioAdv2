<?php

//Sessão
session_start();

//conexão
require '..\..\includes\db_connect.php';

//clear
function clear($input){
	global $connect;
	
	//sql
	$var = mysqli_escape_string($connect, $input);
	
	//xss
	$var = htmlspecialchars($var);
	return $var;
}

//Deleta cliente
if(isset($_POST['btn-deletar'])):
	$id = clear($_POST['id']);

	$sql="DELETE FROM usuarios WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index_adm.php?pagina=clientes');

	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index_adm.php?pagina=clientes');	
	endif;	
endif;

?>