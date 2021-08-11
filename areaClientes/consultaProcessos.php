<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'USER')): 
  header('Location: ../index.php');
endif;

?>
<div class="section container">
  <div class="col s10">
    <span><h3 class="center">Como consultar seus processos!</h3></span>

    <!--Video container-->
    <div class="video-container z-depth-2">
      <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <br><br>
    <div class="center">
    	<a href="https://esaj.tjms.jus.br/cpopg5/open.do" class="btn pulse black" target="_blank">Processos de 1° grau</a>
    	<a href="https://esaj.tjms.jus.br/cposg5/open.do" class="btn pulse black" target="_blank">Processos de 2° grau</a>
    </div>
  </div>
</div>