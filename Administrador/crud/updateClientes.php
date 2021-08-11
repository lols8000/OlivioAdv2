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

if(isset($_POST['btn-editar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);
	$cpf = clear($_POST['cpf']);
	$tel = clear($_POST['tel']);
	$id = clear($_POST['id']);
	$login = clear($_POST['login']);
	$senha = clear($_POST['senha']);
	$tipo = clear($_POST['tipoUsuario']);

	//Verificação da checkbox
	if(isset($_POST['tipoUsuario'])):	
		$tipo = 'ADM';
	else:
	    $tipo = 'USER';
	endif;

	$sql="UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', email='$email', idade='$idade', cpf='$cpf', telefone='$tel', login='$login', senha= md5('$senha'), tipo='$tipo' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Salvo com sucesso!";
		header('Location: ../index_adm.php?');

	else:
		$_SESSION['mensagem'] = "Erro ao salvar";
		header('Location: ../index_adm.php?');	
	endif;	
endif;
?>