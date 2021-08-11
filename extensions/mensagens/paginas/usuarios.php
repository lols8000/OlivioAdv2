<?php include_once "../notificacoes/contMsgChat.php"; ?>
<div id="content">
	<?php
		if($_SESSION['tipo'] == 'ADM')
		{
			$seleciona = mysqli_query($conecta, "SELECT * FROM usuarios WHERE tipo = 'USER'");
		}else{
			$seleciona = mysqli_query($conecta, "SELECT * FROM usuarios WHERE tipo = 'ADM'");
		}
		
		$conta = mysqli_num_rows($seleciona);

		if($conta <= 0){
			echo "Nenhum usuário encontrado";
		}else{
		while($row = mysqli_fetch_array($seleciona)){
			$nome = $row['nome'];
			$usuario = $row['login'];
			$foto = 'imagens/nophoto_m.gif';
	?>
	<tr>
		<td><img src="<?php echo $foto;?>" class="foto-user"/></td>
		<td><b><?php echo $nome;?></b></td>
		<td><a onclick="esconde_notifi_msg('<?php echo $usuario; ?>');" href="?pagina=chat&usuario=<?php echo $usuario;?>" class="btn btn-info">Iniciar <span style="display: <?php echo contNotifiMsgUser($usuario); ?>;" class="badge badge-light"><?php echo contNotifiMsgUser($usuario); ?> Nova mensagem</span></a></td>
	</tr>
	<hr/>
	<?php }}?>
</div>