<!--Contador de visitas-->
<div style="display: none;"><?php include_once "extensions/contador/index.php"; ?></div>

<?php

//Iniciando sessão
session_start();

//chama o arquivo conexão
include_once "includes/db_connect.php";

//Contador de usuarios/visitantes online
include_once "extensions/usuariosOnline/includes.php";

function exibir($botao){ 
  global $connect;
  $sql =  "SELECT * FROM pag_principal WHERE botao = '$botao'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado); 
  return $dados;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Vanessa Olivio Advogada</title>
	<link rel="icon" href="img/logo.png">

    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Materialize CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	
	<!--Custom CSS-->
	<link rel="stylesheet" href="css/custom.css">
</head>
<body class="fundo">
	
    <!--Header-->
	<?php include_once 'includes\header.php'; ?>    
    
    <!--Slidwer-->
    <div class="row container section">
    	<div class="col s12 l8">	    		
		    <div class="slider">
			    <ul class="slides z-depth-3">
			     
			     <!--Imagem 1-->
			      <li>
			        <img src="img/<?php $dados = exibir("btn-modal1");  echo $dados['imagem']; ?>"> 
			        <div class="caption center-align filter center">
			          <h3 class="light blue-text"><?php $dados = exibir("btn-modal1");  echo $dados['titulo']; ?></h3>
			          <h5 class="light black-text"><?php $dados = exibir("btn-modal1");  echo $dados['texto']; ?></h5>
			        </div>
			      </li>
			     
			      <!--Imagem 2-->
			      <li>
			        <img src="img/<?php $dados = exibir("btn-modal2");  echo $dados['imagem']; ?>"> 
			        <div class="caption left-align filter center">
			          <h3 class="light blue-text"><?php $dados = exibir("btn-modal2");  echo $dados['titulo']; ?></h3>
			          <h5 class="light black-text"><?php $dados = exibir("btn-modal2");  echo $dados['texto']; ?></h5>
			        </div>
			      </li>
			      
			      <!--Imagem 3-->
			      <li>
			        <img src="img/<?php $dados = exibir("btn-modal3");  echo $dados['imagem']; ?>"> 
			        <div class="caption right-align filter center">
			          <h3 class="light blue-text"><?php $dados = exibir("btn-modal3");  echo $dados['titulo']; ?></h3>
			          <h5 class="light black-text"><?php $dados = exibir("btn-modal3");  echo $dados['texto']; ?></h5>
			        </div>
			      </li>
			      
			      <!--Imagem 4-->
			      <li>
			        <img src="img/<?php $dados = exibir("btn-modal4");  echo $dados['imagem']; ?>"> 
			        <div class="caption center-align filter center">
			          <h3 class="light blue-text"><?php $dados = exibir("btn-modal4");  echo $dados['titulo']; ?></h3>
			          <h5 class="light black-text"><?php $dados = exibir("btn-modal4");  echo $dados['texto']; ?></h5>
			        </div>
			      </li>
			    </ul>
	  		</div>		  			  	
			</div>
			<div class="col s12 l4">			  	
		  	<div class="card-panel z-depth-3">
		  		<span>
				  <p>
				  	<?php $dados = exibir("btn-textarea");  echo $dados['texto']; ?>
	              </p>
		  		</span>			  		
		  	</div>			  		          	
	  	</div>
		</div>
		
		<!--Artigos-->
		<div class="row container">
			<section class="col s12 m12 l9">
				<h5 class="center-align">Advogados Associados</h5>
				
				<!--Cartões de noticias 1-->
				<form action="conteudo.php" method="POST">
  				<article class="col s12 m12 xl4">
  					<div class="card z-depth-3">
			            <div class="card-image z-depth-5">
			              <img class="responsive-img" src="img/<?php $dados = exibir("btn-noticias1");  echo $dados['imagem']; ?>" height="230px">              
			            </div>
			            <div class="card-content">
			              <span class="card-title center blue-text"><?php $dados = exibir("btn-noticias1");  echo $dados['titulo']; ?></span>
			              <p><?php $dados = exibir("btn-noticias1");  echo substr($dados['texto'], 0, 180)."..."; ?></p>
			            </div>
			            <div class="card-action center-align">
			              <button class="btn black light" type="submit" name="artigo1">Continuar Lendo...</button>
			            </div>
			        </div>
  				</article>
				</form>
				
				<!--Cartões de noticias 2-->
				<form action="conteudo.php" method="POST">
  				<article class="col s12 m6 xl4">
  					<div class="card z-depth-3">
			            <div class="card-image z-depth-5">
			              <img class="responsive-img" src="img/<?php $dados = exibir("btn-noticias2");  echo $dados['imagem']; ?>" height="230px">
			            </div>
			            <div class="card-content">
			              <span class="card-title center blue-text"><?php $dados = exibir("btn-noticias2");  echo $dados['titulo']; ?></span>
			              <p><?php $dados = exibir("btn-noticias2");  echo substr($dados['texto'], 0, 180)."..."; ?></p>
			            </div>
			            <div class="card-action center-align">
			              <button class="btn black light" type="submit" name="artigo2">Continuar Lendo...</button>
			            </div>
			        </div>
  				</article>
				</form>

				<!--Cartões de noticias 3-->
				<form action="conteudo.php" method="POST">
  				<article class="col s12 m6 xl4">
  					<div class="card z-depth-3">
			            <div class="card-image z-depth-5">
			              <img class="responsive-img" src="img/<?php $dados = exibir("btn-noticias3");  echo $dados['imagem']; ?>">			              
			            </div>
			            <div class="card-content">
			              <span class="card-title center blue-text"><?php $dados = exibir("btn-noticias3");  echo $dados['titulo']; ?></span>
			              <p><?php $dados = exibir("btn-noticias3");  echo substr($dados['texto'], 0, 180)."..."; ?></p>
			            </div>
			            <div class="card-action center-align">
			              <button class="btn black light" type="submit" name="artigo3">Continuar Lendo...</button>				                          
			            </div>
			        </div>
  				</article>
				</form>
			</section>
			<br><br>
			
			<!--Aside-->
			<aside class="col s12 m12 l3">
				<h5 class="center-align">Assuntos mais buscados</h5>
				    <ul class="collection z-depth-3">
				    <li class="collection-item avatar">
				      <img src="img/sample5.jpg" alt="" class="circle">
				      <span class="title">Direito Consumidor</span>
				      <p>First Line <br>
				         Second Line
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle">folder</i>
				      <span class="title">Direito Cívil</span>
				      <p>First Line <br>
				         Second Line
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle green">insert_chart</i>
				      <span class="title">Direito trabalhista</span>
				      <p>First Line <br>
				         Second Line
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle red">play_arrow</i>
				      <span class="title">Direito da família</span>
				      <p>First Line <br>
				         Second Line
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
				    </li>
				 	<li class="collection-item avatar">
				      <i class="material-icons circle red">play_arrow</i>
				      <span class="title">Direito imobiliário</span>
				      <p>First Line <br>
				         Second Line
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
				    </li>
			    </ul>
			</aside>  			
		</div>

		<!--Footer-->
		<?php include_once 'includes/footer.php'; ?>

	<!--Jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!--Materialize JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  	
  	<!--Scripts da página-->
  	<script>
  		$(document).ready(function(){
  			$(".dropdown-button").dropdown();
  			//Botão menu
  			$(".button-collapse").sideNav();
  			//Slider
  			$('.slider').slider();
  			//colapsible
  			$('.collapsible').collapsible();
  		});
  	</script> 	
</body>
</html>	

