<?php
	function getIp(){
		return $_SERVER['REMOTE_ADDR'];
	}

	function getTime(){
		date_default_timezone_set('America/cuiaba');
		return time() + (60 * 10);
	}

	function verifica_ip_online($connect){
		$ip = getIp();

		$sql = $connect->prepare("SELECT * FROM usuarios_online WHERE ip = ?");
		$sql->bind_param("s", $ip);
		$sql->execute();

		return $sql->get_result()->num_rows;
	}

	function deleta_linhas($connect){
		$tempo = getTime() - (60 * 20);
		$sql = $connect->prepare("DELETE FROM usuarios_online WHERE tempo < ?");
		$sql->bind_param("s", $tempo);
		$sql->execute();

	}

	function grava_ip_online($connect){
		deleta_linhas($connect);

		$ip = getIp();
		$tempo = getTime();

		if(verifica_ip_online($connect) <= 0){
			if(@!$_SESSION['logado']){
				$sql = $connect->prepare("INSERT INTO usuarios_online (tempo, ip) VALUES (?, ?)");
				$sql->bind_param("ss", $tempo, $ip);
				$sql->execute();
			}else if($_SESSION['logado'] == true){
				$query = $connect->prepare("INSERT INTO usuarios_online (tempo, ip, sessao) VALUES (?, ?, ?)");
				$query->bind_param("sss", $tempo, $ip, $_SESSION['logado']);
				$query->execute();
			}
		}else{
			if(@!$_SESSION['logado']){
				$sql = $connect->prepare("UPDATE usuarios_online SET tempo = ?, ip = ? WHERE ip = ?");
				$sql->bind_param("sss", $tempo, $ip, $ip);
				$sql->execute();
			}else if($_SESSION['logado'] == true){
				$sql = $connect->prepare("UPDATE usuarios_online SET tempo = ?, ip = ?, sessao = ? WHERE ip = ?");
				$sql->bind_param("ssss", $tempo, $ip, $_SESSION['logado'], $ip);
				$sql->execute();
			}

		}
	}

	function pega_totalUsuariosOnline($connect){
		$sql = $connect->prepare("SELECT * FROM usuarios_online WHERE sessao IS NOT NULL");
		$sql->execute();
		return $sql->get_result()->num_rows;
	}

	function pega_totalVisitantesOnline($connect){
		$sql = $connect->prepare("SELECT * FROM usuarios_online WHERE sessao IS NULL");
		$sql->execute();
		return $sql->get_result()->num_rows;
	}

	echo grava_ip_online($connect);

	//echo "<br>Total usuários online: ".pega_totalUsuariosOnline($connect);
	//echo "<br>Total Visitantes online: ".pega_totalVisitantesOnline($connect);

?>