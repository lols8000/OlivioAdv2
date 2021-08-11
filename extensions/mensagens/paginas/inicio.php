<?php	
	$usuario = $_GET['usuario'];

	$query = "SELECT *  FROM usuarios WHERE login = '$usuario'";
	$result = mysqli_query($conecta, $query);
	$busca = mysqli_num_rows($result);
	$linha = mysqli_fetch_assoc($result);

	
	$_SESSION['nome'] = $linha['nome'];
	$_SESSION['usuario'] = $linha['login'];
	$_SESSION['tipo'] = $linha['tipo'];
	
	echo '<meta http-equiv="Refresh" content="1; url=?pagina=usuarios">';
?>
