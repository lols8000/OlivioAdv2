<?php
//Notificações
include_once "../extensions/notificacoes/contNotifi.php";

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<div class="section container">

  <!--Card Panel-->
  <div class="card-panel white">

    <!--collapsible mensagens clientes-->      
    <h4 class="center">Recebimento de documentos</h4>
    <?php

      //Lista todos os usuários do banco
      $resultado = mysqli_query($connect, "SELECT * FROM usuarios WHERE tipo = 'USER'");
      while($usuarios = mysqli_fetch_array($resultado)):
    ?>          
    <ul class = "collapsible popout" data-collapsible = "expandable" onclick="esconde_notifi('<?php echo $usuarios['login']; ?>');">
       <li>
          <div class = "collapsible-header">
            <i class = "material-icons">account_circle</i><?php echo $usuarios['nome']; ?>
            <span class="new badge black" style="display: <?php echo contNotifiUser($usuarios['login']); ?>" id="<?php echo $usuarios['login']; ?>" data-badge-caption="Novos arquivos"><?php echo contNotifiUser($usuarios['login']); ?></span>
           </div>
          <div class = "collapsible-body">
            
            <!--Tabela de arquivos-->
            <table class="striped">
              <thead>
                <tr>
                  <th>Arquivo:</th>
                  <th class="center">Download:</th>
                  <th class="center">Apagar:</th>
                </tr>
              </thead>
              <tbody>
              <?php
                
                $id = $usuarios['id'];
                $sqlArquivos = "SELECT * FROM arquivos where id_de = '$id'";
                $result = mysqli_query($connect, $sqlArquivos);
                $cont = 0;

                if(mysqli_num_rows($result) == 0):
                  echo "<td>Nenhum arquivo encontrado!</td><td></td><td></td>";      
                else:

                  //Lista os arquivos enviados por usuário
                  while($arquivos = mysqli_fetch_array($result)):
              ?>
                  <tr>
                    <td><i class="material-icons prefix">attach_file</i><span><?php echo $cont++.'. '.$arquivos['nome'].' - '.date('d/m/Y', strtotime($arquivos['data'])); ?></span></td>
                    <td class="center"><a href="../upDown/download.php?fileID=<?php echo $arquivos['id'] ?>"><i class="material-icons">cloud_download</i></a></td>
                    <td class="center"><a href="../upDown/delete.php?id=<?php echo $arquivos['id']; ?>"><i class="material-icons">delete</i></a></td>
                  </tr>
                  <?php endwhile; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>          
       </li>
    </ul>
    <?php endwhile; ?>
  </div>
</div>