<?php
//sessão
//session_start();

//conexão
require_once '../../includes/db_connect.php';

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

//insere no banco informações modal card 1
if(isset($_POST['btn-card1'])):
	uploadImg('areasImg1');	
	insere('pag_areasatuacao', 'btn-card1', clear($_POST['tituloCard1']), clear($_POST['textareaCard1']), 'areasImg1.'.pathinfo($_FILES['areasImg1']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal card 2
elseif (isset($_POST['btn-card2'])):
	uploadImg('areasImg2');	
	insere('pag_areasatuacao', 'btn-card2', clear($_POST['tituloCard2']), clear($_POST['textareaCard2']), 'areasImg2.'.pathinfo($_FILES['areasImg2']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal card 3
elseif (isset($_POST['btn-card3'])):
	uploadImg('areasImg3');	
	insere('pag_areasatuacao', 'btn-card3', clear($_POST['tituloCard3']), clear($_POST['textareaCard3']), 'areasImg3.'.pathinfo($_FILES['areasImg3']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal card 4
elseif (isset($_POST['btn-card4'])):
	uploadImg('areasImg4');	
	insere('pag_areasatuacao', 'btn-card4', clear($_POST['tituloCard4']), clear($_POST['textareaCard4']), 'areasImg4.'.pathinfo($_FILES['areasImg4']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal card 5
elseif (isset($_POST['btn-card5'])):
	uploadImg('areasImg5');	
	insere('pag_areasatuacao', 'btn-card5', clear($_POST['tituloCard5']), clear($_POST['textareaCard5']), 'areasImg5.'.pathinfo($_FILES['areasImg5']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal card 6
elseif (isset($_POST['btn-card6'])):
	uploadImg('areasImg6');	
	insere('pag_areasatuacao', 'btn-card6', clear($_POST['tituloCard6']), clear($_POST['textareaCard6']), 'areasImg6.'.pathinfo($_FILES['areasImg6']['name'], PATHINFO_EXTENSION));
endif;

?>