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

//insere no banco informações modal principal 1
if(isset($_POST['btn-modal1'])):
	uploadImg('imgModal1');
	insere('pag_principal', 'btn-modal1', clear($_POST['tituloModal1']), clear($_POST['textareaModal1']), 'imgModal1.'.pathinfo($_FILES['imgModal1']['name'], PATHINFO_EXTENSION));	

//insere no banco informações modal principal 2
elseif (isset($_POST['btn-modal2'])):
	uploadImg('imgModal2');
	insere('pag_principal', 'btn-modal2', clear($_POST['tituloModal2']), clear($_POST['textareaModal2']), 'imgModal2.'.pathinfo($_FILES['imgModal2']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal principal 3
elseif (isset($_POST['btn-modal3'])):
	uploadImg('imgModal3');
	insere('pag_principal', 'btn-modal3', clear($_POST['tituloModal3']), clear($_POST['textareaModal3']), 'imgModal3.'.pathinfo($_FILES['imgModal3']['name'], PATHINFO_EXTENSION));

//insere no banco informações modal principal 4
elseif (isset($_POST['btn-modal4'])):
	uploadImg('imgModal4');
	insere('pag_principal', 'btn-modal4', clear($_POST['tituloModal4']), clear($_POST['textareaModal4']), 'imgModal4.'.pathinfo($_FILES['imgModal4']['name'], PATHINFO_EXTENSION));

//insere no banco informações textarea principal
elseif (isset($_POST['btn-textarea'])):	
	insere('pag_principal', 'btn-textarea', null, clear($_POST['textarea5']), null);

//insere no banco informações noticias principal 1
elseif (isset($_POST['btn-noticias1'])):
	uploadImg('imgArtigo1');	
	insere('pag_principal', 'btn-noticias1', clear($_POST['noticias1']), clear($_POST['textareaNoticias1']), 'imgArtigo1.'.pathinfo($_FILES['imgArtigo1']['name'], PATHINFO_EXTENSION));

//insere no banco informações noticias principal 2
elseif (isset($_POST['btn-noticias2'])):
	uploadImg('imgArtigo2');
	insere('pag_principal', 'btn-noticias2', clear($_POST['noticias2']), clear($_POST['textareaNoticias2']), 'imgArtigo2.'.pathinfo($_FILES['imgArtigo2']['name'], PATHINFO_EXTENSION));

//insere no banco informações noticias principal 3
elseif (isset($_POST['btn-noticias3'])):
	uploadImg('imgArtigo3');
	insere('pag_principal', 'btn-noticias3', clear($_POST['noticias3']), clear($_POST['textareaNoticias3']), 'imgArtigo3.'.pathinfo($_FILES['imgArtigo3']['name'], PATHINFO_EXTENSION));
endif;

?>