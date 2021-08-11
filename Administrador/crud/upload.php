<?php

//Iniciando sessão
session_start();

//Efetua o upload das imagens
function uploadImg($arquivo){	
	$formatoPermitidos = array("png", "jpeg", "jpg");
	$extensao = pathinfo($_FILES["$arquivo"]['name'], PATHINFO_EXTENSION);
	if(in_array($extensao, $formatoPermitidos)):
		$pasta = "../../img/";
		$temporario = $_FILES["$arquivo"]['tmp_name'];
		$novoNome = "$arquivo".".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):
			$_SESSION['upload'] = "Upload feito com sucesso!";
		else:
			$_SESSION['upload'] = "Não foi possivel realizar o upload do arquivo!";			
		endif; 
	else:
		$_SESSION['upload'] = "Formato inválido!";	
	endif;	
}

?>