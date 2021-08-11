<div class="row loginPading">	
	<div class="col s4 offset-s4">				
		<div class="card-panel center-align">			
			
			<!--Titulo-->
			<h3 class="center-align light blue-text"> Login </h3>
			<?php
			if(!empty($erros)):
				foreach ($erros as $erro): 
					echo $erro;
				endforeach;
			endif;
			?>

			<!--Login/senha-->				
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="input-field">
					<i class="material-icons prefix">account_circle</i>
					<input class="validate" id="login" type="text" name="login">
					<label for="login">Login</label>
				</div>
				<div class="input-field">
					<i class="material-icons prefix">vpn_key</i>
					<input id="password" type="password" name="senha">
					<label for="password">Senha</label>
				</div>
				<button class="btn waves-effect waves-light black" type="submit" name="btn-entrar">Entrar</button>
			</form>					
		</div>				
	</div>				
</div>