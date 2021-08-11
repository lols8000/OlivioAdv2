<?php
//Banco de dados
require_once '../../includes/db_connect.php';

marcaLidoMsg($_POST['usuario']);

//Marca como lido no banco de dados
function marcaLidoMsg($user){
	
  global $connect;
  mysqli_query($connect, "UPDATE notifications SET status = 1 WHERE id_para = '$user' AND notificacao = 'mensagem'");
}

?>