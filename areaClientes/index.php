<?php

//Sessão
session_start();

//Chama o arquivo conexão
require_once '../includes/db_connect.php';

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'USER')):
  header('Location: ../index.php');
endif;

function exibir($tabela, $botao)
{
  global $connect;

  //Se botão igual a 1 faz consulta a tabela usuário
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
<div style="display: none;"><?php include_once "extensions/usuariosOnline/includes.php"; ?></div>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Vanessa Olivio Advogada</title>
	<link rel="icon" href="../img/logo.png">
	
	<!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Materialize CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	
	<!--Custom CSS-->
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body class="fundoADM">
<div class="row">
	<div class="col s2">	
		
		<!--Header-->
		<header>

		  <!--SideNav lateral-->			
		  <ul id="slide-out" class="side-nav fixed center" style="background-image: url(../img/stressed_linen.png);">
		    <li>
			    <div class="user-view">
			      <div class="background">
			        <img src="../img/stressed_linen.png">
			      </div>
			      <a href="#!user"><div align="center"><img class="circle" src="../img/logo.png"></div></a>
			      <a href="#!name"><span class="name">Olá <?php $dados = exibir('usuarios', '1'); echo $dados['nome']; ?></span></a>
			      <a href="#!email"><span class="email"><?php $dados = exibir('usuarios', '1'); echo $dados['email']; ?></span></a>
			      <a href="..\login\logout.php">Sair</a>
			    </div>
			</li>
		    <li><div class="divider white"></div></li>
		    <li><a class="subheader yellow-text">Menu</a></li>
		    <li><a class="waves-effect white-text" href="index.php?p=consulta">Acompanhamento de processos</a></li>
		    <li><a class="waves-effect white-text" href="index.php?p=documentos">Envio de documentos</a></li>
		    <li><a class="white-text" href="../extensions/mensagens/index.php?usuario=<?php $dados = exibir('usuarios', '1'); echo $dados['login']; ?>&userID=<?php echo $dados['id']; ?>" target="_blank">Mensagens</a></li>
		   	<li><a class="waves-effect white-text" href="index.php?p=notificacoes">Notificações</a></li>	    
		  </ul>
		  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		</header>
	</div>

	<!--Carrega página requerida-->
	<div class="col s10">
		<?php
			
			$pagina = @$_GET['p'];
			
			if($pagina == 'documentos'):				
				require_once 'documentos.php';	
			elseif($pagina == 'consulta'):
				require_once 'consultaProcessos.php';
			elseif($pagina == 'notificacoes'):
				require_once 'notificacoes.php';
			else:
				require_once 'bemVindo.php';			
			endif;		
		?>	
	</div>
</div>

<!--Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Materialize JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!--Javascrip-->
<script>
	
	//Inicialização
	$(document).ready(function(){
		
		//SideNav lateral
		$(".button-collapse").sideNav();
	});
</script>

</body>
</html>