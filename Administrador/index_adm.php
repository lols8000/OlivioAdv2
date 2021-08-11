<?php

//Inicia sessão
session_start();

//Banco de dados
require_once '../includes/db_connect.php';

if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')):
  header('Location: ../index.php');
endif;

//Mensagem
function mensagem(){
  if(isset($_SESSION['mensagem'])):
    echo "<script>Materialize.toast('".$_SESSION['mensagem']."', 4000)</script>";
    unset( $_SESSION['mensagem']);
    
    if(isset($_SESSION['upload'])):
      echo "<script>Materialize.toast('".$_SESSION['upload']."', 4000)</script>";    
      unset( $_SESSION['upload']);
    endif;
  endif; 
}

function exibir($tabela, $botao)
{
  global $connect;

  //Se botão igual a 1 faz consulta a tabela usuário senão consulta a tabela recebida
  if($botao == 1):
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
  else:
    $sql =  "SELECT * FROM $tabela WHERE botao = '$botao'";
  endif;

  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado); 
  return $dados;
}

?>

<!--Contador de usuarios/visitantes online-->
<div style="display: none;"><?php include_once "../extensions/usuariosOnline/includes.php"; ?></div>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=">
      <title>Vanessa Olívio Advogada</title>
      <link rel="icon" href="../img/logo.png">
      
      <!--Google Icon-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Materialize CSS-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      
      <!--Custom CSS-->
      <link rel="stylesheet" href="../css/custom.css">
      
      <!--Custom JS-->
      <script src="../js/script.js"></script> 
  </head>

<!--Body-->
<body class="fundoADM">

<div class="row">
    
  <!--Header-->
  <header>
    <div class="col s2">          
      
      <!--Menu Navbar lateral-->          
      <ul id="slide-out" class="side-nav fixed center" style="background-image: url(../img/stressed_linen.png);">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="../img/stressed_linen.png">
                </div>
              <a href="#!user"><div align="center"><img class="circle" src="../img/logo.png"></div></a>
              <a href="#!name"><span class="name">olá <?php $dados = exibir('usuarios', '1'); echo $dados['nome']; ?></span></a>
              <a href="#!email"><span class="email"><?php $dados = exibir('usuarios', '1'); echo $dados['email']; ?></span></a>
              <a href="../login/logout.php">Sair</a>
            </div>
        </li>
        <li><div class="divider white"></div></li>
        <li><a class="yellow-text subheader">Menu</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=home">Home</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=principal">Página principal</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=sobre">Página sobre</a></li>        
        <li><a class="white-text" href="index_adm.php?pagina=areasAtuacao">Página Áreas de Atuação</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=clientes">Usuários</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=documentos">Recebimento de documentos</a></li>
        <li><a href="../extensions/mensagens/index.php?usuario=<?php $dados = exibir('usuarios', '1'); echo $dados['login']; ?>" class="white-text" target="_blank">Mensagens</a></li>
        <li><a class="white-text" href="index_adm.php?pagina=config">Configurações</a></li>
      </ul>

      <!--Menu Mobile-->
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>  
  </header>

  <!--Gets da página-->
  <div class="col s10">          
    <?php

      $pagina = @$_GET['pagina'];
      
      if($pagina == 'principal'):
        require_once 'principal.php';
        mensagem();
      elseif($pagina == 'sobre'):
        require_once 'sobre.php';
        mensagem();
      elseif($pagina == 'areasAtuacao'):
        require_once 'areasAtuacao.php';
        mensagem();
      elseif($pagina == 'clientes'):
        require_once 'clientes.php';
        
      elseif($pagina == 'documentos'):
        require_once 'documentos.php';

      elseif ($pagina == 'config'):
        require_once 'config.php';
      
      else:
        require_once 'home.php';      
        
      endif;    
    
    ?>      
  </div>
</div>

<!--Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Materialize JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!--Scripts da página-->
<script>
  $(document).ready(function(){

  //Select
  $('select').material_select();
  
  //Configuração datepiker
  $('.datepicker').pickadate();

  //Menu navbar lateral
  $(".button-collapse").sideNav();
  
  //Tooltip
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  
  //Slider
  $('.slider').slider();
  
  //Botão menu
  $(".button-collapse").sideNav();
  
  //Colapsible
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  
  //Modal
  $('.modal').modal({
    dismissible: true, // Modal can be dismissed by clicking outside of the modal
    opacity: .5, // Opacity of modal background
    inDuration: 400, // Transition in duration
    outDuration: 300, // Transition out duration
    startingTop: '4%', // Starting top style attribute
    endingTop: '10%', // Ending top style attribute
    ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      console.log(modal, trigger);
    },
  });
});
</script>

<!--Colapsible--> 
<script>
  function expandAll(){
    $(".collapsible-header").addClass("active");
    $(".collapsible").collapsible({accordion: false});
  }

  function collapseAll(){
    $(".collapsible-header").removeClass(function(){
      return "active";
    });
    $(".collapsible").collapsible({accordion: true});
    $(".collapsible").collapsible({accordion: false});
  }
</script>

</body>
</html>