<?php

//Notificações
include_once "../extensions/notificacoes/contNotifi.php";

//chama o arquivo conexão
require_once "../includes/db_connect.php";

//Usuários online
include_once "../extensions/usuariosOnline/includes.php";

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<div class="container">
  <div class="row">
    <div class="col s10">
      
      <!--Contador de usuários/visitantes online-->
      <div class="col s3">
        <div class="card-panel black">
          <span class="white-text center">
            <h5>
              <?php 
                echo "Total usuários online: ".pega_totalUsuariosOnline($connect)."<br><br>"; 
                echo "Total Visitantes online: ".pega_totalVisitantesOnline($connect);
              ?>           
            </h5>
          </span>
        </div>
      </div>
      
      <!--Card contador de total acessos-->
      <div class="col s3">
        <div class="card-panel black card2-panel">
          <span class="white-text center"><h5>Número total de visitas<br><br><div id="contAcessos"></div></h5></span><br>
        </div>
      </div>
      
      <!--Card notificações-->
      <div class="col s3">
        <div class="card-panel black">
          <span class="white-text center">
            <h5>
              <?php 
                echo "Total arquivos não lidos: ".contNotifiArquivos()."<br><br>"; 
                echo "Total mensagens não lidas: ".contNotifiMsg();
              ?>
            </h5> 
          </span>
        </div>
      </div>
      
      <!--Card processo 2°instância-->
      <div class="col s3">
        <div class="card-panel black">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
    </div>    
  </div>

  <div class="row">
    <div class="col s10">

      <!--Fom pesquisar processo por data-->
      <form action="index_adm.php?p=primeiraInstancia" method="POST">

        <!--DatePiker-->
        <div class="col s4">
          <input class="datepicker" id="selectData" type="text" name="selectData">
          <label class="btn black" for="selectData">Selecione uma data</label>
        </div>

        <!--Select-->
        <div class="col s4">
          <select name="opcao">
              <option value="mensagens">Mensagens</option>
              <option value="1_instancia">1° Instância</option>
              <option value="2_instancia">2° Instância</option>
          </select>
        </div>
        
        <!--Botão enviar data processo-->
        <div class="col s2">
          <button type="submit" name="btn-dataProcesso" class="btn black"><i class="material-icons center">search</i></button>
        </div>
      </form>
    </div>  
  </div>

  <!--Botões Abrir\fechar todos--> 
  <div class="row">    
    <div class="col s10 center">
      <a class="waves-effect btn black" onClick="expandAll();"><i class="tiny material-icons left">fullscreen</i>Abrir Todos</a>
      <a class="waves-effect btn black" onClick="collapseAll();"><i class="material-icons left">fullscreen_exit</i>Fechar todos</a>   
    </div>
  </div>
  <?php
  
    $pagDataProcesso = @$_GET['p'];
    if($pagDataProcesso == 'primeiraInstancia'){
      require_once 'pesquisaDataProcesso.php';
    }
  
  ?>  
  
  <!--collapsible mensagens clientes-->
  <div class="col s10">
    <h4>Menssagens clientes</h4>          
    <ul class = "collapsible popout" data-collapsible = "expandable" onClick="abrir();">
       <li>
          <div class = "collapsible-header">
             <i class = "material-icons">filter_drama</i>First Section<span class="new badge" style="display:none;">4</span></div>
          <div class = "collapsible-body"><p>This is first section.</p></div>
       </li>     
       <li>
          <div class = "collapsible-header">
             <i class = "material-icons">place</i>Second Section</div>
          <div class = "collapsible-body"><p>This is second section.</p></div>
       </li>
       
       <li>
          <div class = "collapsible-header">
             <i class = "material-icons">whatshot</i>Third Section</div>
          <div class = "collapsible-body"><p>This is third section.</p></div>
       </li>
    </ul>
  </div>

  <div class="col s10">
    <h3>Processo 1° instância</h3>
  </div>
  
  <?php
 
    //consulta o bando e retorna todos os resultado organizados por data      
    $sql = "SELECT * FROM 1_instancia WHERE data BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE()";
    $resultado = mysqli_query($connect, $sql);
    while($dados = mysqli_fetch_array($resultado)):
 
  ?>  
  
  <!--collapsible Processo 1° instância-->  
  <div class="col s10">                
    <ul class = "collapsible popout" data-collapsible = "expandable" onClick="abrir();">
       <li>
          <div class = "collapsible-header">
             <i class = "material-icons">message</i><?php echo date('d/m/Y', strtotime($dados['data'])); ?><span class="new badge" style="display:none;">1</span></div>
          <div class = "collapsible-body"><p><?php echo $dados['texto']; ?></p></div>
       </li>
    </ul>
  </div>
  <?php endwhile; ?>
  
  <div class="col s10">
    <h3>Processo 2° instância</h3>
  </div>
  
  <?php
 
    //consulta o bando e retorna todos os resultado organizados por data      
    $sql = "SELECT * FROM 2_instancia WHERE data BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE()";
    $resultado = mysqli_query($connect, $sql);
    while($dados = mysqli_fetch_array($resultado)):
  
  ?>  
  
  <!--collapsible Processo 2° instância-->  
  <div class="col s10">                
    <ul class = "collapsible popout" data-collapsible = "expandable" onClick="abrir();">
       <li>
          <div class = "collapsible-header">
             <i class = "material-icons">message</i><?php echo date('d/m/Y', strtotime($dados['data'])); ?><span class="new badge" style="display:none;">1</span></div>
          <div class = "collapsible-body"><p><?php echo $dados['texto']; ?></p></div>
       </li>
    </ul>
  </div>
  <?php endwhile; ?>
</div>

<!--Contador de acessos-->
<script type="text/javascript">
  var auto_refresh = setInterval(
  function ()
  {
  $('#contAcessos').load('../extensions/contador/contador.php').fadeIn("slow");
  }, 3000); // refresh every 10000 milliseconds
</script>