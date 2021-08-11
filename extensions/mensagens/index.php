<?php
	session_start();
	include_once("settings/settings.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanessa Olívio Advogada</title>
    <link rel="icon" href="../../img/logo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <link href="../../css/custom.css" rel="stylesheet"/>
    
    <script type="text/javascript" src="js/script.js"></script>
    
  </head>
  <body>
  	<?php if($showNome){?>
  		<p>Bem vindo <code><?php echo $nomeAtual;?><a href="?pagina=usuarios"> Sair</a></code></p>
	  <?php } ?>
      
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <?php
            $dir = "paginas/";
            $ext = ".php";

            if(isset($_GET['pagina'])){
              $pagina = ($_GET['pagina']);
            }else{
              $pagina = "inicio";
            }

            if(file_exists($dir.$pagina.$ext)){
              include($dir.$pagina.$ext);
            }else{
              echo "Página não encontrada!";
            }

          ?>
        </div>
      </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>