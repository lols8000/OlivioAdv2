<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<!--Slidwer-->
<div class="row container section">
  <div class="col s12 l7">          
    <div class="slider">
      <ul class="slides z-depth-3">
        <li>
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-modal1'); echo $dados['imagem']; ?>"> <!-- random image 1-->
          <div class="caption center-align filter center">
            <h3 class="light blue-text"><?php $dados = exibir('pag_principal', 'btn-modal1'); echo $dados['titulo']; ?></h3>
            <h5 class="light black-text"><?php $dados = exibir('pag_principal', 'btn-modal1'); echo $dados['texto']; ?></h5>
            <div class="center-align"><a href="#modal1" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
          </div>
        </li>
        <li>
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-modal2'); echo $dados['imagem']; ?>"> <!-- random image 2-->
          <div class="caption left-align filter center">
            <h3 class="light blue-text"><?php $dados = exibir('pag_principal', 'btn-modal2'); echo $dados['titulo']; ?></h3>
            <h5 class="light black-text"><?php $dados = exibir('pag_principal', 'btn-modal2'); echo $dados['texto']; ?></h5>
            <div class="center-align"><a href="#modal2" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
          </div>
        </li>
        <li>
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-modal3'); echo $dados['imagem']; ?>"> <!-- random image 3-->
          <div class="caption right-align filter center">
            <h3 class="light blue-text"><?php $dados = exibir('pag_principal', 'btn-modal3'); echo $dados['titulo']; ?></h3>
            <h5 class="light black-text"><?php $dados = exibir('pag_principal', 'btn-modal3'); echo $dados['texto']; ?></h5>
            <div class="center-align"><a href="#modal3" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
          </div>
        </li>
        <li>
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-modal4'); echo $dados['imagem']; ?>"> <!-- random image 4-->
          <div class="caption center-align filter center">
            <h3 class="light blue-text"><?php $dados = exibir('pag_principal', 'btn-modal4'); echo $dados['titulo']; ?></h3>
            <h5 class="light black-text"><?php $dados = exibir('pag_principal', 'btn-modal4'); echo $dados['texto']; ?></h5>
            <div class="center-align"><a href="#modal4" class="btn-floating btn-large modal-trigger pulse black"><i class="material-icons">edit</i></a></div>
          </div>
        </li>
      </ul>
      
      <!-- Modal 1 Structure -->
      <div id="modal1" class="modal">
        <span class="center-align"><h4 class="light blue-text">Figura 1</h4></span>
        <div class="modal-content">
          
          <!--Form file-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="tituloModal1" id="tituloModal1" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-modal1'); echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="tituloModal1">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaModal1" id="textarea1" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-modal1'); echo $dados['texto']; ?></textarea>
                <label for="textarea1">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgModal1">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            
            <!--Botões footer modal 1-->
            <div class="modal-footer">
              <button type="submit" name="btn-modal1" class="btn">Aplicar</button>
              <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
            </div> 
          </form>
        </div>
      </div>
      
      <!-- Modal 2 Structure -->
      <div id="modal2" class="modal">
        <span class="center-align"><h4 class="light blue-text">Figura 2</h4></span>
        <div class="modal-content">
          
          <!--Form file-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="tituloModal2" id="tituloModal2" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-modal2'); echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="tituloModal2">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaModal2" id="textarea2" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-modal2'); echo $dados['texto']; ?></textarea>
                <label for="textarea2">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgModal2">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
          
          <!--Botões footer modal 2-->
          <div class="modal-footer">
            <button type="submit" name="btn-modal2" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
          </form>
        </div>
      </div> 
      
      <!-- Modal 3 Structure -->
      <div id="modal3" class="modal">
        <span class="center-align"><h4 class="light blue-text">Figura 3</h4></span>
        <div class="modal-content">
          
          <!--Form file-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="tituloModal3" id="tituloModal3" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-modal3'); echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="tituloModal3">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaModal3" id="textarea3" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-modal3'); echo $dados['texto']; ?></textarea>
                <label for="textarea3">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgModal3">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
          
          <!--Botões footer modal 3-->
          <div class="modal-footer">
            <button type="submit" name="btn-modal3" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
          </form>
        </div>
      </div> 
      
      <!-- Modal 4 Structure -->
      <div id="modal4" class="modal">
        <span class="center-align"><h4 class="light blue-text">Figura 4</h4></span>
        <div class="modal-content">
          
          <!--Form file-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="tituloModal4" id="tituloModal4" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-modal4'); echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="tituloModal4">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaModal4" id="textarea4" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-modal4'); echo $dados['texto']; ?></textarea>
                <label for="textarea4">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgModal4">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
          
          <!--Botões footer modal 4-->
          <div class="modal-footer">
            <button type="submit" name="btn-modal4" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
          </div> 
          </form>
        </div>
      </div> 
    </div>                
  </div>
  <div class="col s12 l5">          
    <div class="card-panel z-depth-3">
      <span>
          
          <!--Text área-->
          <div class="row">
          <form action="crud/createPrincipal.php" method="POST" class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea type="textarea" id="textarea5" name="textarea5" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-textarea');  echo $dados['texto']; ?></textarea>
              </div>
            </div>
            
            <!--Botões enviar-->
            <div class="center-align">                 
              <button class="btn black" type="submit" name="btn-textarea">Aplicar<i class="material-icons right">send</i></button>
            </div>
          </form>              
        </div>
      </span>           
    </div>                        
  </div>
</div>

<!--Artigos-->
<div class="row container">
  <section class="col s12 m6 l9">
    <h5 class="light center-align">Advogados Associados</h5>
    
    <!--Cartões de Artigos 1-->
    <article class="col s12 l6 xl4">
      <div class="card z-depth-3">
        <div class="card-image z-depth-5">
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-noticias1');  echo $dados['imagem']; ?>" height="230px">                  
        </div>
        <div class="card-content">                    
          <span class="card-title center blue-text"><?php $dados = exibir('pag_principal', 'btn-noticias1');  echo $dados['titulo']; ?></span>
          <p><?php $dados = exibir('pag_principal', 'btn-noticias1');  echo $dados['texto']; ?></p>
        </div>
        <div class="center-align">
          <a href="#noticias1" class="btn-floating btn-small modal-trigger pulse black"><i class="material-icons">edit</i></a>
        </div>
        <br>
      
      <!-- Modal Artigos 1-->
      <div id="noticias1" class="modal">
        <span class="center-align"><h4 class="light blue-text">Noticias 1</h4></span>
        <div class="modal-content">
          
          <!--Form file Artigos 1-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="noticias1" id="noticias1" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-noticias1');  echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="noticias1">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaNoticias1" id="textareaNot1" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-noticias1');  echo $dados['texto']; ?></textarea>
                <label for="textareaNoticias1">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgArtigo1">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            
            <!--Botões Artigos 1-->
            <div class="modal-footer">
              <button type="submit" name="btn-noticias1" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
            </div>  
          </form>
        </div>
      </div>
      </div>
    </article>
    
    <!--Cartões de Artigos 2-->
    <article class="col s12 l6 xl4">
      <div class="card z-depth-3">
        <div class="card-image z-depth-5">
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-noticias2');  echo $dados['imagem']; ?>" height="230px">                   
        </div>
        <div class="card-content">
          <span class="card-title center blue-text"><?php $dados = exibir('pag_principal', 'btn-noticias2');  echo $dados['titulo']; ?></span>
          <p><?php $dados = exibir('pag_principal', 'btn-noticias2');  echo $dados['texto']; ?></p>
        </div>
        <div class="center-align">
          <a href="#noticias2" class="btn-floating btn-small modal-trigger pulse black"><i class="material-icons">edit</i></a>
        </div>
        <br>
      
      <!-- Modal Artigos 2-->
      <div id="noticias2" class="modal">
        <span class="center-align"><h4 class="light blue-text">Noticias 2</h4></span>
        <div class="modal-content">
          
          <!--Form file Artigos 2-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="noticias2" id="noticias2" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-noticias2');  echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="noticias2">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaNoticias2" id="textareaNot2" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-noticias2');  echo $dados['texto']; ?></textarea>
                <label for="textareaNoticias2">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgArtigo2">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            
            <!--Botões Artigos 2-->
            <div class="modal-footer">
              <button type="submit" name="btn-noticias2" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
            </div>  
          </form>
        </div>
      </div>
      </div>
    </article>
    
    <!--Cartões de Artigos 3-->
    <article class="col s12 l6 xl4">
      <div class="card z-depth-3">
        <div class="card-image z-depth-5">
          <img src="../img/<?php $dados = exibir('pag_principal', 'btn-noticias3');  echo $dados['imagem']; ?>" height="230px">                   
        </div>
        <div class="card-content">
          <span class="card-title center blue-text"><?php $dados = exibir('pag_principal', 'btn-noticias3');  echo $dados['titulo']; ?></span>
          <p><?php $dados = exibir('pag_principal', 'btn-noticias3');  echo $dados['texto']; ?></p>
        </div>
        <div class="center-align">
          <a href="#noticias3" class="btn-floating btn-small modal-trigger pulse black"><i class="material-icons">edit</i></a>
        </div>
        <br>
      
      <!-- Modal Artigos 3-->
      <div id="noticias3" class="modal">
        <span class="center-align"><h4 class="light blue-text">Noticias 3</h4></span>
        <div class="modal-content">
          
          <!--Form file Artigos 3-->
          <form action="crud/createPrincipal.php" method="POST" enctype="multipart/form-data">
            <div class="row">                                   
              <div class="input-field col s12">
                <input name="noticias3" id="noticias3" type="text" class="validate" value="<?php $dados = exibir('pag_principal', 'btn-noticias3');  echo $dados['titulo']; ?>" data-length="180">
                <label class="active" for="noticias3">Título</label>
              </div>
            </div>                   
            <div class="row">
              <div class="input-field col s12">
                <textarea name="textareaNoticias3" id="textareaNot3" class="materialize-textarea" data-length="512"><?php $dados = exibir('pag_principal', 'btn-noticias3');  echo $dados['texto']; ?></textarea>
                <label for="textareaNoticias3">Digite o texto</label>
              </div>
            </div>
            <div class="row">                 
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagem</span>
                  <input type="file" name="imgArtigo3">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            
            <!--Botões Artigos 3-->
            <div class="modal-footer">
              <button type="submit" name="btn-noticias3" class="btn">Aplicar</button>
            <a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>
            </div>  
          </form>
        </div>
      </div>    
      </div>
    </article>
  </section>
  <br><br>
  
  <!--Aside-->
  <aside class="col s12 m6 l3">
    <h5 class="center-align">Assuntos mais Lidos</h5>
        <ul class="collection z-depth-3">
        <li class="collection-item avatar">
          <img src="../img/sample5.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
        </li>              
      </ul>
  </aside>       
</div>

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="../js/materialize.js"></script>