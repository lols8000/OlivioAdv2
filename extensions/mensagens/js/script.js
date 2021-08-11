$(document).ready(function(){
	comeca();
})

	var timerI = null;
	var timerR = false;

	function para(){
		if(timerR)
			clearTimeout(timerI);
			timerR = false;
	}

	function lista(){
		$.ajax({
			url:"paginas/sys/lista.php",
			success: function(textStatus){
				$("#lista").html(textStatus); //Mostra o resultado da página lista.php
			}
		})
		timerI = setTimeout("lista()", 3000); //Tempo de espera para atualizar novamente
		timerR = true;
	}

	function comeca(){
		para();
		lista();
	}

//Esconde o alerta de notificação assim que acionado
function esconde_notifi_msg(user) {
	
  $.ajax({
    type: 'POST',
    url: '../../extensions/notificacoes/marcaLidoMsg.php',
    
    data: {
          usuario: user
    } /* ... */
  });    
}