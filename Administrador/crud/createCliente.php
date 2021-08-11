<?php

//Sessão
session_start();

//conexão
require_once '../../includes/db_connect.php';

//clear
function clear($input){
	global $connect;

	//sql
	$var = mysqli_escape_string($connect, $input);

	//xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);
	$cpf = clear($_POST['cpf']);
	$tel = clear($_POST['tel']);
	$login = clear($_POST['login']);
	$senha = clear($_POST['senha']);
	$tipo = clear($_POST['tipo']);

	if($tipo == 'Administrador'):
		$tipo = 'ADM';
	else:
		$tipo = 'USER';
	endif;

	$sql="INSERT INTO usuarios (nome, sobrenome, email, idade, cpf, telefone, login, senha, tipo, selecionado) VALUES ('$nome', '$sobrenome', '$email', '$idade','$cpf', '$tel', '$login', md5('$senha'), '$tipo', '0')";
	
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index_adm.php?pagina=clientes');

	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index_adm.php?pagina=clientes');	
	endif;	
endif;
?>