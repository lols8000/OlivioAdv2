<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'USER')): 
  header('Location: ../index.php');
endif;

?>
<div class="section container">
	<div class="card-panel" style="background-position: center; background-repeat: no-repeat; height: 800px; background-image: url(../img/bem_vindo.jpg);"></div>
</div>