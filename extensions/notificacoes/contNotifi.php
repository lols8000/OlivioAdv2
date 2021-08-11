<?php 

//Conta o numero de notificações de cada usuário recebido
function contNotifiUser($user){
  
  global $connect;
  
  $result = mysqli_query($connect, "SELECT id_para FROM notifications WHERE id_para = '$user' AND status = '0' AND notificacao = 'arquivo'");    
  
  if(mysqli_num_rows($result) <= 0):
  
    return "none;";
  else:
  
    return mysqli_num_rows($result);
  endif;
}

//Conta o numero de notificações de novos arquivos
function contNotifiArquivos(){
  
  global $connect;
  
  $result = mysqli_query($connect, "SELECT * FROM notifications WHERE notificacao = 'arquivo' AND status = '0'"); 

  return mysqli_num_rows($result);

}

//Conta o numero de notificações de novas mensagens
function contNotifiMsg(){
  
   global $connect;
  
   $result = mysqli_query($connect, "SELECT * FROM notifications WHERE notificacao = 'mensagem' AND status = '0'");    
  
   return mysqli_num_rows($result);

}

?>