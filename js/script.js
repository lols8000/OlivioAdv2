//Esconde o alerta de notificação assim que acionado
function esconde_notifi(user) {

  document.getElementById(user).style.display="none";

  $.ajax({
    type: 'POST',
    url: '../extensions/notificacoes/marcaLido.php',
    
    data: {
          usuario: user
    } /* ... */
  });    
}