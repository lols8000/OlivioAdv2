<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<!--Card revel-->
<div class="row container alinhamento">
  <section class="col s12">
      
      <!--Card revel 1-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">          
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>                           
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 1-->
        <div class="left-align">
          <a href="#card1" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          Editar Cartão 1
        </div>
      </article>
      
      <!--Card revel 2-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 2-->
        <div class="left-align">
          <a href="#card2" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          Editar Cartão 2
        </div>
      </article>
      
      <!--Card revel 3-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 3-->
        <div class="left-align">           
          <a href="#card3" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          Editar Cartão 3
        </div>
      </article>
      
      <!--Card revel 4-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 4-->
        <div class="left-align">           
          <a href="#card4" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          Editar Cartão 4
        </div>
      </article>
      
      <!--Card revel 5-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 5-->
        <div class="left-align">           
          <a href="#card5" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          Editar Cartão 5
        </div>  
      </article>
      
      <!--Card revel 6-->
      <article class="col s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../img/<?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['imagem']; ?>" height="240px">
          </div>
          <div class="card-content">
            <span class="card-title activator blue-text"><?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['titulo']; ?></span>
            <p class="light"><?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['texto']; ?></p>
          </div>
        </div>
        
        <!--Botão modal 6-->
        <div class="left-align">           
          <a href="#card6" class="btn-floating btn-large modal-trigger pulse black">
            <i class="material-icons">edit</i>
          </a>
          <span>Editar Cartão 6</span>
        </div>
      </article> 
  </section>
  
  <!-- Modal card revel 1 -->
  <div id="card1" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 1</h4></span>
    <div class="modal-content">
      
      <!--Form file card 1-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard1" id="tituloCard1" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard1">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard1" id="textarea1" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card1'); echo $dados['texto']; ?></textarea>
            <label for="textarea1">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg1">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 1-->
        <div class="modal-footer">
          <button type="submit" name="btn-card1" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>
  
  <!-- Modal card revel 2 -->
  <div id="card2" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 2</h4></span>
    <div class="modal-content">
      
      <!--Form file card 2-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard2" id="tituloCard2" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard2">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard2" id="textarea2" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card2'); echo $dados['texto']; ?></textarea>
            <label for="textarea2">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg2">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 2-->
        <div class="modal-footer">
          <button type="submit" name="btn-card2" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>

  <!-- Modal card revel 3 -->
  <div id="card3" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 3</h4></span>
    <div class="modal-content">
      
      <!--Form file card 3-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard3" id="tituloCard3" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard3">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard3" id="textarea3" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card3'); echo $dados['texto']; ?></textarea>
            <label for="textarea3">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg3">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 3-->
        <div class="modal-footer">
          <button type="submit" name="btn-card3" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>

  <!-- Modal card revel 4 -->
  <div id="card4" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 4</h4></span>
    <div class="modal-content">
      
      <!--Form file card 4-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard4" id="tituloCard4" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard4">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard4" id="textarea3" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card4'); echo $dados['texto']; ?></textarea>
            <label for="textarea4">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg4">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 4-->
        <div class="modal-footer">
          <button type="submit" name="btn-card4" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>

  <!-- Modal card revel 5 -->
  <div id="card5" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 5</h4></span>
    <div class="modal-content">
      
      <!--Form file card 5-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard5" id="tituloCard5" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard5">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard5" id="textarea5" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card5'); echo $dados['texto']; ?></textarea>
            <label for="textarea5">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg5">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 5-->
        <div class="modal-footer">
          <button type="submit" name="btn-card5" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>

  <!-- Modal card revel 6 -->
  <div id="card6" class="modal">
    <span class="center-align"><h4 class="light blue-text">Card Revel 6</h4></span>
    <div class="modal-content">
      
      <!--Form file card 6-->
      <form action="crud/createAreasAtuacao.php" method="POST" enctype="multipart/form-data">
        <div class="row">                                   
          <div class="input-field col s12">
            <input name="tituloCard6" id="tituloCard6" type="text" class="validate" value="<?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['titulo']; ?>" data-length="256">
            <label class="active" for="tituloCard6">Título</label>
          </div>
        </div>                   
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textareaCard6" id="textarea6" class="materialize-textarea" data-length="1024"><?php $dados = exibir('pag_areasatuacao', 'btn-card6'); echo $dados['texto']; ?></textarea>
            <label for="textarea3">Digite o texto</label>
          </div>
        </div>
        <div class="row">                 
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="areasImg6">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        
        <!--Botões footer modal card 6-->
        <div class="modal-footer">
          <button type="submit" name="btn-card6" class="btn">Aplicar</button>
          <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
        </div> 
      </form>
    </div>
  </div>
</div>

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="../js/materialize.js"></script> 