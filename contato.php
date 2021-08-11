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
  <!--Card-->      
  <div class="row alinhamentoTop">          
    <div class="col s6 container push-s3">
      <div class="card-panel z-depth-3">
      
      <!--Titulo-->
      <div class="row">          
        <div>
          <span><h3 class="center-align light blue-text">Contato</h3></span>
        </div>
      </div>

        <!--Formulário-->              
        <form>
          <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix">account_box</i>             
              <input id="nome" type="text" class="validate">
              <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="sobrenome" type="text" class="validate">
              <label for="sobrenome">Sobrenome</label>
            </div>
          </div>
          <div class="row">            
            <div class="input-field col s12">
              <i class="material-icons prefix">mail</i>
              <input type="email" id="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">message</i>
              <textarea id="assunto" class="validate materialize-textarea"></textarea>
              <label for="assunto">Assunto</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="input-field inline">
                <i class="material-icons prefix">phone</i>
                <input id="telefone" type="tel" class="validate">
                <label for="telefone" data-error="Ops!" data-success="ok!">Telefone com DDD</label>
              </div>
            </div>
          </div>
          <div class="center-align"><a class="waves-effect waves-light btn grey darken-4"><i class="material-icons right">mail_outline</i>Enviar</a>
        </form>
      </div>              
    </div>
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
   
</body>
</html>