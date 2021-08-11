<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

if(isset($_POST['btn-dataProcesso'])):
	
	//Pega a data selecionada
	$data = $_POST['selectData'];
	
	//Pega opção selecionada
	$opcao = $_POST['opcao'];
	
	//Formada a data para o padrão do banco de dados
	$dataFormatada = date('Y-m-d', strtotime($data));

	if($opcao == '1_instancia'):
		echo "<h3>Processos de 1° instância do dia ".date('d/m/Y', strtotime($data))."</h3>";
	elseif($opcao == '2_instancia'):
		echo "<h3>Processos de 2° instância do dia ".date('d/m/Y', strtotime($data))."</h3>";
	else:
		echo "<h3>Mensagens Clientes do dia ".date('d/m/Y', strtotime($data))."</h3>";
	endif;
endif;

//Consulta o bando e retorna todos os resultado organizados por data      
$sql = "SELECT * FROM $opcao WHERE data = '$dataFormatada'";
$resultado = mysqli_query($connect, $sql);

if(is_null(mysqli_fetch_array($resultado))):
	echo "<h5>Nenhum resultado encontado!</h5>";
else:

//Consulta o bando e retorna todos os resultado organizados por data      
$sql = "SELECT * FROM $opcao WHERE data = '$dataFormatada'";
$resultado = mysqli_query($connect, $sql);
while($dados = mysqli_fetch_array($resultado)):

?>  

<!--Collapsible-->  
<div class="col s10">                
<ul class = "collapsible popout" data-collapsible = "expandable" onClick="abrir();">
   <li>
      <div class = "collapsible-header">
         <i class = "material-icons">message</i><?php echo date('d/m/Y', strtotime($dados['data'])); ?><span class="new badge" style="display:none;">1</span></div>
      <div class = "collapsible-body"><p><?php echo $dados['texto']; ?></p></div>
   </li>
</ul>
</div>

<?php 

endwhile; 
endif;

?>