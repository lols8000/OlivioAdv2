<?php

//conexão
require '../includes/db_connect.php';

//Verificação
if((isset($_SESSION['logado'])) && ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

global $adv; 
global $estados;

?>

<form action="" method="POST">

	<!--Advogados Assossiados-->
	<div class="section container">
		<div class="row">		
			<div class="col s10">
				<h3 class="light center-align">Pesquisar processo dos advogados:</h3>
				<table class="striped">

					<thead>
						<tr>
							<th>Nome:</th>
							<th>Sobrenome:</th>
							<th>Email:</th>
							<th>Idade:</th>
							<th>CPF:</th>
							<th>Telefone:</th>
							<th>Login:</th>
							<th class="center-align">Selecionar:</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM usuarios WHERE tipo = 'ADM'";
							$resultado = mysqli_query($connect, $sql);
							while($dados = mysqli_fetch_array($resultado)):							
						?>
						<tr>
							<td><?php echo $dados['nome']; ?></td>
							<td><?php echo $dados['sobrenome']; ?></td>
							<td><?php echo $dados['email']; ?></td>
							<td><?php echo $dados['idade']; ?></td>
							<td><?php echo $dados['cpf']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>
							<td><?php echo $dados['login']; ?></td>
							<td class="center-align">
						      <input type="checkbox" name="adv<?php $adv++; ?>" value="<?php echo $dados['id']; ?>" <?php if($dados['selecionado'] == '1'): echo 'checked="checked"'; endif; ?> id="<?php echo $dados['id']; ?>" />
						      <label for="<?php echo $dados['id']; ?>"></label>						
							</td>
						</tr><?php endwhile; ?>							
					</tbody>			
				</table>
			</div>
		</div>

		<!--Estados do Brasil-->
		<div class="row">
			<div class="col s10">
				<h3 class="light center-align">Pesquisar processo no estado de:</h3>
				<table class="striped">

					<thead>
						<tr>
							<th>Estado:</th>
							<th class="center-align">Selecionar:</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM estados";
							$resultado = mysqli_query($connect, $sql);
							while($dados = mysqli_fetch_array($resultado)):
						?>
						<tr>
							<td><?php echo $dados['estado']; ?></td>
							<td class="center-align">
						      <input type="checkbox" value="<?php echo $dados['id']; ?>" name="estados[]" <?php if($dados['selecionado'] == '1'): echo 'checked="checked"'; endif; ?> id="<?php echo $dados['id']; ?>" />
						      <label for="<?php echo $dados['id']; ?>"></label>
							</td>
						</tr><?php $estados++; endwhile; ?>							
					</tbody>			
				</table>

				<!--Botão salvar-->
				<div class="section">
					<button type="submit" name="btn-salvarConfig" class="btn black right">Salvar</button>
				</div>
			</div>
		</div>
	</div>
</form>

<?php

if(isset($_POST['btn-salvarConfig'])):

	@$checked = $_POST['adv'];

	//if($checked != null):

		//for($i=0; $i <= count($checked); $i++):

	    	//Verificação da checkbox advogados
			//if(isset($checked[$i])):
			//	mysqli_query($connect, "UPDATE usuarios SET selecionado = '1' WHERE id = '$checked[$i]'");
			//else:
			//	mysqli_query($connect, "UPDATE usuarios SET selecionado = '0' WHERE id = '$checked[$i]'");
			//endif;
			echo "$adv";			
		//endfor;		
	//endif;
endif;
?>