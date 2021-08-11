<?php

//Banco de dados
include_once '../includes/db_connect.php';

//Insere as notificações no bando de dados
function notificacao($id_de){
   global $connect;

   //Encontra o login do usuário logado
   $resultado = mysqli_fetch_assoc(mysqli_query($connect, "SELECT login FROM usuarios WHERE id = '$id_de'"));
   $login = $resultado['login'];

   //Insere uma nova notificação
   mysqli_query($connect, "INSERT INTO notifications (id_para, notificacao) VALUES ('$login', 'arquivo')");
}

if(isset($_POST['enviar-formulario'])):   
   
   $id_de = $_POST['id'];
   $data = date("Y/m/d");
   $formatoPermitidos = array("jpeg", "jpg", "gif", "png", "pdf", "docx", "xlsx", "pptx");
   $extensao = pathinfo($_FILES["arquivo"]['name'], PATHINFO_EXTENSION);
   
   if(in_array($extensao, $formatoPermitidos)):
      
      //Redireciona o arquivo para pasta correta
      if($extensao == 'pdf'):
      
         $pasta = 'arquivos/PDF/';      
      elseif($extensao == 'docx' or 'xlsx' or 'pptx'):
       
         $pasta = 'arquivos/texto/';      
      else:      
       
         $pasta = '../img/';
         $temporario = $_FILES["$arquivo"]['tmp_name'];
         $novoNome = "$arquivo".".$extensao";
      endif;

      $temporario = $_FILES['arquivo']['tmp_name'];
      $novoNome = uniqid().".$extensao";

      if(move_uploaded_file($temporario, $pasta.$novoNome)):
         $_SESSION['upload'] = "Upload feito com sucesso!";
         
         //Caso sucesso em inserir o caminho no banco de dados insere uma nova notificação         
         if(mysqli_query($connect, "INSERT INTO arquivos(id_de, nome, caminho, data) VALUES('$id_de', '$novoNome', '$pasta', '$data')")):
            notificacao($id_de);         
         endif;

         header('Location: ../areaClientes/index.php?p=documentos');      
      else:
      
         $_SESSION['upload'] = "Não foi possivel realizar o upload do arquivo!";
         header('Location: ../areaClientes/index.php?p=documentos');    
      endif; 
   
   else:

      $_SESSION['upload'] = "Formato inválido!";
      header('Location: ../areaClientes/index.php?p=documentos'); 
   endif;

endif;

?>