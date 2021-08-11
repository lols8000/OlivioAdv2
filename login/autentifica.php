<?php
	//sessão
	session_start();

	//chama o arquivo conexão
	require_once 'includes/db_connect.php';
	

	//botao enviar
	if(isset($_POST['btn-entrar'])):
		$erros = array();
		$login = mysqli_escape_string($connect, $_POST['login']);
		$senha = mysqli_escape_string($connect, $_POST['senha']);

		if(empty($login) or empty($senha)):
			$erros[] = "<li>O campo login/senha precisa ser preenchido</li>";
		else:
			$sql = "SELECT login FROM usuarios WHERE login = '$login'";
			$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) > 0):
				$senha = md5($senha);
				$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
				$resultado = mysqli_query($connect, $sql);
				
				if(mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					$_SESSION['tipo'] = $dados['tipo'];
					
					if($dados['tipo'] == "ADM"):
						header('Location: Administrador\index_adm.php');
					else:
						header('Location: areaClientes\index.php');
					endif;
				
				else:
					$erros[] = "<code>Usuário e senha não conferem </code>";
				endif;


			else:
				$erros[] = "<code>Usuário inexistente</code>";
			endif;

		endif;

	endif;
?>