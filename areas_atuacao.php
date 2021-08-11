<?php

//chama o arquivo conexão
require_once 'includes\db_connect.php';

function exibir($botao){ 
  global $connect;
  $sql =  "SELECT * FROM pag_areasatuacao WHERE botao = '$botao'";
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

    <!--Card revel-->
    <div class="row container alinhamentoTop">
      <section class="col s12">
          
          <!--Card revel 1-->
          <article class="col s4">
            <div class="card">                  
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card1");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card1");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>                  
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card1");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card1");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
          
          <!--Card revel 2-->
          <article class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card2");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card2");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card2");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card2");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
          
          <!--Card revel 3-->
          <article class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card3");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card3");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card3");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card3");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
          
          <!--Card revel 4-->
          <article class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card4");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card4");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card4");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card4");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
          
          <!--Card revel 5-->
          <article class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card5");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card5");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card5");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card5");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
          
          <!--Card revel 6-->
          <article class="col s4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/<?php $dados = exibir("btn-card6");  echo $dados['imagem']; ?>" height="260px">
              </div>
              <div class="card-content">
                <span class="card-title activator blue-text"><?php $dados = exibir("btn-card6");  echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title blue-text"><i class="material-icons right">close</i><?php $dados = exibir("btn-card6");  echo $dados['titulo']; ?></span>
                <p class="light"><?php $dados = exibir("btn-card6");  echo $dados['texto']; ?>.</p>
              </div>
            </div>
          </article>
      </section>          
    </div>  
          
    <!--Footer-->
    <?php
      include_once 'includes/footer.php';
    ?>

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.js"></script>
    <?php
      //fecha conexão com o banco de dados
      mysqli_close($connect);
    ?>      
</body>
</html>