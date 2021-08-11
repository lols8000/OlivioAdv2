<?php
//chama o arquivo conexão
require_once 'includes\db_connect.php';

function exibir($botao){ 
  global $connect;
  $sql =  "SELECT * FROM pag_sobre WHERE botao = '$botao'";
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

        <!--Slider Full scream-->
        <div class="section alinhamentoTop">
          <div class="slider">
              <ul class="slides z-depth-3">
                <li>
                  <img src="img/<?php $dados = exibir("btn-sobre1");  echo $dados['imagem']; ?>"> <!-- random image 1-->
                  <div class="caption center-align filter center">
                    <h3 class="blue-text"><?php $dados = exibir("btn-sobre1");  echo $dados['titulo']; ?></h3>
                    <h5 class="light black-text text-accent-4"><?php $dados = exibir("btn-sobre1");  echo $dados['texto']; ?></h5>
                  </div>
                </li>
                <li>
                  <img src="img/<?php $dados = exibir("btn-sobre2");  echo $dados['imagem']; ?>"> <!-- random image 2-->
                  <div class="caption left-align filter center">
                    <h3 class="blue-text"><?php $dados = exibir("btn-sobre2");  echo $dados['titulo']; ?></h3>
                    <h5 class="light black-text text-accent-4"><?php $dados = exibir("btn-sobre2");  echo $dados['texto']; ?></h5>
                  </div>
                </li>
                <li>
                  <img src="img/<?php $dados = exibir("btn-sobre3");  echo $dados['imagem']; ?>"> <!-- random image 3-->
                  <div class="caption right-align filter center">
                    <h3 class="blue-text"><?php $dados = exibir("btn-sobre3");  echo $dados['titulo']; ?></h3>
                    <h5 class="light black-text text-accent-4"><?php $dados = exibir("btn-sobre3");  echo $dados['texto']; ?></h5>
                  </div>
                </li>
                <li>
                  <img src="img/<?php $dados = exibir("btn-sobre4");  echo $dados['imagem']; ?>"> <!-- random image 4-->
                  <div class="caption center-align filter center">
                    <h3 class="blue-text"><?php $dados = exibir("btn-sobre4");  echo $dados['titulo']; ?></h3>
                    <h5 class="light black-text text-accent-4"><?php $dados = exibir("btn-sobre4");  echo $dados['texto']; ?>.</h5>
                  </div>
                </li>
              </ul>
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
                //colapsible
                $('.collapsible').collapsible();
            });
        </script>     
    </body>
</html>