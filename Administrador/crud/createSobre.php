<?php
//sessão
//session_start();

//conexão
require_once '..\..\includes\db_connect.php';

//Upload
include 'upload.php';

//Insere nas páginas
include 'inserePagina.php';

//clear
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	$var = htmlspecialchars($var);
	return $var;
}

//insere no banco informações modal_sobre 1
if(isset($_POST['btn-sobre1'])):
	uploadImg('sobreImg1');
	insere('pag_sobre', 'btn-sobre1', clear($_POST['tituloSobre1']), clear($_POST['textareaSobre1']), 'sobreImg1.'.pathinfo($_FILES['sobreImg1']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal_sobre 2
elseif (isset($_POST['btn-sobre2'])):
	uploadImg('sobreImg2');
	insere('pag_sobre', 'btn-sobre2', clear($_POST['tituloSobre2']), clear($_POST['textareaSobre2']), 'sobreImg2.'.pathinfo($_FILES['sobreImg2']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal sobre 3
elseif (isset($_POST['btn-sobre3'])):
	uploadImg('sobreImg3');
	insere('pag_sobre', 'btn-sobre3', clear($_POST['tituloSobre3']), clear($_POST['textareaSobre3']), 'sobreImg3.'.pathinfo($_FILES['sobreImg3']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal 4
elseif (isset($_POST['btn-sobre4'])):
	uploadImg('sobreImg4');
	insere('pag_sobre', 'btn-sobre4', clear($_POST['tituloSobre4']), clear($_POST['textareaSobre4']), 'sobreImg4.'.pathinfo($_FILES['sobreImg4']['name'], PATHINFO_EXTENSION));
endif;

?>