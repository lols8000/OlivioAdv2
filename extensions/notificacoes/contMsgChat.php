<?php

//Banco de dados
require_once '../../includes/db_connect.php';

//Conta o numero de notificações de cada usuário recebido
function contNotifiMsgUser($user){
  
  global $connect;
  
  $result = mysqli_query($connect, "SELECT id_para FROM notifications WHERE id_para = '$user' AND status = '0' AND notificacao = 'mensagem'");    
  
  if(mysqli_num_rows($result) <= 0):
  
    return "none;";
  else:
  
    return mysqli_num_rows($result);
  endif;
}
?>