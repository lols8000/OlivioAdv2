<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<div class="row container">
	<div class="col s10">
		<ul class="tabs tabs-fixed tab-demo z-depth-1 center-align">
			<li class="tab"><a class="active" href="#listar">Lista de Clientes</a></li>
			<li class="tab"><a href="#cadastrar">Cadastrar</a></li>	
		</ul>
		<div class="col s12" id="listar">
			<?php include_once "listaClientes.php"; ?>
		</div>
		<div class="col s12" id="cadastrar">
			<?php include_once "cadastrarCliente.php"; ?>
		</div>
	</div>
</div>