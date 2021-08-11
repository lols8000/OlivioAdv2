<?php

//Verificação
if(!isset($_SESSION['logado']) || ($_SESSION['tipo'] != 'ADM')): 
  header('Location: ../index.php');
endif;

?>

<!--Formulário de cadastro de cliente-->
<div class="row">
	<div class="col s10 offset-s2">
		<h3 class="light">Novo Cliente</h3>
		<form action="crud/createCliente.php" method="POST">
			<div class="col s10">
			  <div class="divider"></div>
			  
			  <!--Botão radio adm-->
		      <input name="tipo" type="radio" value="Administrador" id="adm" />
		      <label for="adm">Administrador</label>			    
		  	  
		  	  <!--Botão radio user-->
		      <input name="tipo" type="radio" value="Usuário" id="user" />
		      <label for="user">Usuário</label>
		      <div class="divider"></div>		
			</div>
			<div class="input-field col s10">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s10">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s10">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>
			<div class="input-field col s10">
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>
			<div class="input-field col s10">
				<input type="text" name="cpf" id="cpf">
				<label for="cpf">CPF</label>
			</div>
			<div class="input-field col s10">
				<input type="tel" name="tel" id="tel">
				<label for="tel">Telefone</label>
			</div>
			<div class="input-field col s10">
				<input type="text" name="login" id="login">
				<label for="login">Login</label>
			</div>
			<div class="input-field col s10">
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>
			<button type="submit" name="btn-cadastrar" class="btn black">Cadastrar</button>	
		</form>
	</div>	
</div>

<!--CSS da página-->
<style type="text/css">
[type="radio"]:checked + label:after, [type="radio"].with-gap:checked + label:after {
    background-color: #0c0c0c;
}

[type="radio"]:checked + label:after, [type="radio"].with-gap:checked + label:before, [type="radio"].with-gap:checked + label:after {
    border: 2px solid #020202;
}
</style>