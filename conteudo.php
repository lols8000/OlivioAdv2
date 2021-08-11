<?php

//sessão
session_start();

//chama o arquivo conexão
require_once 'includes\db_connect.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Vanessa Olivio Advogada</title>
    <link rel="icon" href="img/logo.png">
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/custom.css">  
</head>
<body class="fundo">

  <!--Header-->
  <?php
    include_once 'includes\header.php';
  ?> 

  <!--Paralax-->
  <div class="section">
    <div class="parallax-container z-depth-3">
      <div class="parallax"><img src="img/imgArtigo<?php echo rand(1, 3); ?>.jpg"></div>
    </div>
  </div>
  
  <!--Cartão texto-->
  <div class="section">
    <div class="row container">
      <h2 class="header center-align blue-text">
        
        <!--Exibe titulo de acordo com o artigo-->
        <?php
          
          //Artigo 1 
          if(isset($_POST['artigo1'])): 
            $dados = exibir("btn-noticias1");  
            echo $dados['titulo']; 
          
          //Artigo 2
          elseif (isset($_POST['artigo2'])):
            $dados = exibir("btn-noticias2");  
            echo $dados['titulo'];
          
          //Artigo 3
          elseif (isset($_POST['artigo3'])):
            $dados = exibir("btn-noticias3");  
            echo $dados['titulo'];
          endif; 
        ?>
        
      </h2>
      <div class="col s12 l12">          
        <div class="card-panel z-depth-3">
          <span>
            <p class="light">
              
              <!--Exibe texto de acordo com o artigo-->
              <?php
                
                //Artigo 1  
                if(isset($_POST['artigo1'])): 
                  $dados = exibir("btn-noticias1");  
                  echo $dados['texto']; 
                
                //Artigo 2 
                elseif (isset($_POST['artigo2'])):
                  $dados = exibir("btn-noticias2");  
                  echo $dados['texto'];
                
                //Artigo 3 
                elseif (isset($_POST['artigo3'])):
                  $dados = exibir("btn-noticias3");  
                  echo $dados['texto'];
                endif; 
              ?>
            </p>
          </span>           
        </div>                        
      </div>
    </div>
  </div>
  <div class="section">
    <div class="parallax-container z-depth-3">
      <div class="parallax"><img src="img/imgArtigo<?php echo rand(1, 3); ?>.jpg"></div>
    </div>
  </div>
  
  <!--Footer-->
  <?php
    include_once 'includes/footer.php';
  ?>

  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
  <!-- Compiled and minified JavaScript -->
  <script src="js/materialize.js"></script>
  <script>
      $(document).ready(function(){
          
          //Botão menu
          $(".button-collapse").sideNav();
          
          //Slider
          $('.slider').slider({
              height: 700
          });
         
          //Colapsible
          $('.collapsible').collapsible();
          
          //Paralaxx
          $('.parallax').parallax();
      });
  </script>       
</body>
</html>