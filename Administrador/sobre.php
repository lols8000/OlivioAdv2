<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<!--Slider Full scream-->
<div class="section container alinhamento">
  <div class="slider2 slider">
    <ul class="slides z-depth-3">
      <li>
        <img src="../img/<?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['imagem']; ?>"> <!-- random image 1-->
        <div class="caption center-align filter center">
          <h3 class="light blue-text"><?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['titulo']; ?></h3>
          <h5 class="light black-text"><?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['texto']; ?></h5>
          <div class="center-align"><a href="#sobre1" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
        </div>
      </li>
      <li>
        <img src="../img/<?php $dados = exibir('pag_sobre', 'btn-sobre2');  echo $dados['imagem']; ?>"> <!-- random image 2-->
        <div class="caption left-align filter center">
          <h3 class="light blue-text"><?php $dados = exibir('pag_sobre', 'btn-sobre2');  echo $dados['titulo']; ?></h3>
          <h5 class="light black-text"><?php $dados = exibir('pag_sobre', 'btn-sobre2');  echo $dados['texto']; ?></h5>
          <div class="center-align"><a href="#sobre2" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
        </div>
      </li>
      <li>
        <img src="../img/<?php $dados = exibir('pag_sobre', 'btn-sobre3');  echo $dados['imagem']; ?>"> <!-- random image 3-->
        <div class="caption right-align filter center">
          <h3 class="light blue-text"><?php $dados = exibir('pag_sobre', 'btn-sobre3');  echo $dados['titulo']; ?></h3>
          <h5 class="light black-text"><?php $dados = exibir('pag_sobre', 'btn-sobre3');  echo $dados['texto']; ?></h5>
          <div class="center-align"><a href="#sobre3" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
        </div>
      </li>
      <li>
        <img src="../img/<?php $dados = exibir('pag_sobre', 'btn-sobre4');  echo $dados['imagem']; ?>"> <!-- random image 4-->
        <div class="caption center-align filter center">
          <h3 class="light blue-text"><?php $dados = exibir('pag_sobre', 'btn-sobre4');  echo $dados['titulo']; ?></h3>
          <h5 class="light black-text"><?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['texto']; ?></h5>
          <div class="center-align"><a href="#sobre4" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
        </div>
      </li>
    </ul>
    
    <!-- Modal 1 Structure sobre -->
    <div id="sobre1" class="modal">
      <span class="center-align"><h4 class="light blue-text">Figura 1</h4></span>
      <div class="modal-content">
        
        <!--Form file sobre-->
        <form action="crud/createSobre.php" method="POST" enctype="multipart/form-data">
          <div class="row">                                   
            <div class="input-field col s12">
              <input name="tituloSobre1" id="tituloSobre1" type="text" class="validate" value="<?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['titulo']; ?>" data-length="180">
              <label class="active" for="tituloSobre1">Título</label>
            </div>
          </div>                   
          <div class="row">
            <div class="input-field col s12">
              <textarea name="textareaSobre1" id="textareaSObre1" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['texto']; ?></textarea>
              <label for="textareaSobre1">Digite o texto</label>
            </div>
          </div>
          <div class="row">                 
            <div class="file-field input-field">
              <div class="btn">
                <span>Imagem</span>
                <input type="file" name="sobreImg1">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
          
          <!--Botões footer modal 1 sobre-->
          <div class="modal-footer">
            <button type="submit" name="btn-sobre1" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
        </form>
      </div>
    </div>
    
    <!-- Modal 2 Structure sobre -->
    <div id="sobre2" class="modal">
      <span class="center-align"><h4 class="light blue-text">Figura 2</h4></span>
      <div class="modal-content">
        
        <!--Form file sobre-->
        <form action="crud/createSobre.php" method="POST" enctype="multipart/form-data">
          <div class="row">                                   
            <div class="input-field col s12">
              <input name="tituloSobre2" id="tituloSobre2" type="text" class="validate" value="<?php $dados = exibir('pag_sobre', 'btn-sobre2');  echo $dados['titulo']; ?>" data-length="180">
              <label class="active" for="tituloSobre2">Título</label>
            </div>
          </div>                   
          <div class="row">
            <div class="input-field col s12">
              <textarea name="textareaSobre2" id="textareaSObre2" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_sobre', 'btn-sobre2');  echo $dados['texto']; ?></textarea>
              <label for="textareaSobre2">Digite o texto</label>
            </div>
          </div>
          <div class="row">                 
            <div class="file-field input-field">
              <div class="btn">
                <span>Imagem</span>
                <input type="file" name="sobreImg2">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
          
          <!--Botões footer modal 2 sobre-->
          <div class="modal-footer">
            <button type="submit" name="btn-sobre2" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
        </form>
      </div>
    </div>
    
    <!-- Modal 3 Structure sobre -->
    <div id="sobre3" class="modal">
      <span class="center-align"><h4 class="light blue-text">Figura 3</h4></span>
      <div class="modal-content">
        
        <!--Form file sobre-->
        <form action="crud/createSobre.php" method="POST" enctype="multipart/form-data">
          <div class="row">                                   
            <div class="input-field col s12">
              <input name="tituloSobre3" id="tituloSobre3" type="text" class="validate" value="<?php $dados = exibir('pag_sobre', 'btn-sobre3');  echo $dados['titulo']; ?>" data-length="180">
              <label class="active" for="tituloSobre3">Título</label>
            </div>
          </div>                   
          <div class="row">
            <div class="input-field col s12">
              <textarea name="textareaSobre3" id="textareaSObre3" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_sobre', 'btn-sobre3');  echo $dados['texto']; ?></textarea>
              <label for="textareaSobre3">Digite o texto</label>
            </div>
          </div>
          <div class="row">                 
            <div class="file-field input-field">
              <div class="btn">
                <span>Imagem</span>
                <input type="file" name="sobreImg3">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
          
          <!--Botões footer modal 3 sobre-->
          <div class="modal-footer">
            <button type="submit" name="btn-sobre3" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
        </form>
      </div>
    </div>
    
    <!-- Modal 4 Structure sobre -->
    <div id="sobre4" class="modal">
      <span class="center-align"><h4 class="light blue-text">Figura 4</h4></span>
      <div class="modal-content">
        
        <!--Form file sobre-->
        <form action="crud/createSobre.php" method="POST" enctype="multipart/form-data">
          <div class="row">                                   
            <div class="input-field col s12">
              <input name="tituloSobre4" id="tituloSobre4" type="text" class="validate" value="<?php $dados = exibir('pag_sobre', 'btn-sobre4');  echo $dados['titulo']; ?>" data-length="180">
              <label class="active" for="tituloSobre4">Título</label>
            </div>
          </div>                   
          <div class="row">
            <div class="input-field col s12">
              <textarea name="textareaSobre4" id="textareaSObre4" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_sobre', 'btn-sobre1');  echo $dados['texto']; ?></textarea>
              <label for="textareaSobre4">Digite o texto</label>
            </div>
          </div>
          <div class="row">                 
            <div class="file-field input-field">
              <div class="btn">
                <span>Imagem</span>
                <input type="file" name="sobreImg4">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
          
          <!--Botões footer modal 4 sobre-->
          <div class="modal-footer">
            <button type="submit" name="btn-sobre4" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="../js/materialize.js"></script> 