<?php

//conexão
require '../includes/db_connect.php';


mensagem();

//Verificação
if((isset($_SESSION['logado'])) && ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>
<div class="row">
	<div class="col s12">
		<h3 class="light center-align">Cadastro Clientes</h3>
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
					<th>Tipo:</th>
					<th>Editar:</th>
					<th>Deletar:</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM usuarios";
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
					<td><?php echo $dados['tipo']; ?></td>
					<td><a href="#editarCliente?id=<?php echo $dados['id']; ?>"class="btn-floating modal-trigger black"><i class="material-icons">edit</i></a></td>
					<td><a href="#deleteCliente?id=<?php echo $dados['id']; ?>" class="btn-floating modal-trigger yellow"><i class="material-icons">delete</i></a></td>
				</tr>
				
				<!--Modal editar-->
				<div id="editarCliente?id=<?php echo $dados['id']; ?>" class="modal">
					
					<!--Header modal editar-->
					<div class="modal-content">
						<h4 class="light center-align">Editar Cliente</h4>
						<form action="crud/updateClientes.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
							
							<div class="col s10">
							  <div class="divider"></div>
								<p>
							      <input type="checkbox" name="tipoUsuario" <?php if($dados['tipo'] == 'ADM'): echo 'checked="checked"'; endif; ?> id="<?php echo $dados['id']; ?>" />
							      <label for="<?php echo $dados['id']; ?>">Tornar Administrador?</label>
							    </p>
							  <div class="divider"></div>		
							</div>	

							<div class="input-field col s10">
								<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
								<label for="nome">Nome</label>
							</div>
							<div class="input-field col s10">
								<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
								<label for="sobrenome">Sobrenome</label>
							</div>
							<div class="input-field col s10">
								<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s10">
								<input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
								<label for="idade">Idade</label>
							</div>
							<div class="input-field col s10">
								<input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf']; ?>">
								<label for="cpf">CPF</label>
							</div>
							<div class="input-field col s10">
								<input type="tel" name="tel" id="tel" value="<?php echo $dados['telefone']; ?>">
								<label for="tel">Telefone</label>
							</div>
							<div class="input-field col s10">
								<input type="text" name="login" id="login" value="<?php echo $dados['login']; ?>">
								<label for="tel">Login</label>
							</div>
							<div class="input-field col s10">
								<input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
								<label for="tel">Senha</label>
							</div>
							
							<!--Footer modal editar-->
							<div class="col s10">
								<div class="modal-footer">
									<button type="submit" name="btn-editar" class="btn black">Salvar</button>
									<a href="#" class="modal-action modal-close btn-flat">Cancelar</a>
								</div>
							</div>
						</form>	
					</div>
				</div>
				
				<!--Modal deletar-->
				<div id="deleteCliente?id=<?php echo $dados['id']; ?>" class="modal">
					
					<!--Header modal deletar-->
					<div class="modal-content">
						<h4>Opa!</h4>
						<p class="light center-align">Tem certeza que deseja excluir esse cliente?</p>
						
						<!--Footer modal deletar-->						
						<div class="modal-footer">
							<form action="crud/deleteCliente.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
								<button type="submit" name="btn-deletar" class="btn black">sim quero deletar</button>
								<a href="#!" class="modal-action modal-close btn-flat">Cancelar</a>							
							</form>
						</div>
					</div>
				</div>
				<?php endwhile; ?>							
			</tbody>			
		</table>
	</div>
</div>