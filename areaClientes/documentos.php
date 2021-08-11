<?php
  
$id_de = $dados['id'];
  
//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'USER')): 
  header('Location: ../index.php');
endif;

?>
<div class="section container">

  <!--Card Panel-->
  <div class="card-panel white">   
    <h4 class="center">Envio de documentos</h4>          
    <ul class="collection">      
      <?php
        $sql = "SELECT * FROM arquivos WHERE id_de = '$id_de'";
        $resultado = mysqli_query($connect, $sql);
        $contador = 1;
        while($arquivos = mysqli_fetch_array($resultado)):
      ?>
      <li class="collection-item"><?php echo $contador++.' - '.$arquivos['nome']." - ".date('d/m/Y', strtotime($arquivos['data'])); ?><a href="../upDown/delete.php?id=<?php echo $arquivos['id']; ?>"><i class="material-icons right">delete</i></a></li>
      <?php endwhile; ?>
    </ul>

    <!--Form Upload-->
    <form action="../upDown/upload.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id_de; ?>">
      <div class="file-field input-field">
        <div class="btn">
          <span>Arquivo</span>
          <input type="file" name="arquivo">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload one or more files">
        </div>
      </div>
      <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="enviar-formulario">Enviar<i class="material-icons right">send</i></button>
      </div>
    </form>    
  </div>
</div>

<!--CSS da página-->
<style type="text/css">

/*Cor botões*/
.btn, .btn-large {
  background-color: #020202;
}
</style>