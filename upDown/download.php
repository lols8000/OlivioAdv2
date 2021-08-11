<?php
    
    //Conecxão bando de dados
    include_once "../includes/db_connect.php";

    //Exclui tags php e sql
    $GerParam = filter_input(INPUT_GET, "fileID", FILTER_DEFAULT);
    
    //Consulta o banco para pegar o caminho e nome do arquivo
    $sql = "SELECT * FROM arquivos WHERE id = '$GerParam'";
    $resultado = mysqli_query($connect, $sql);
    $file = mysqli_fetch_array($resultado);
    $FILENAME = $file['nome'];
    $FILEPATH = $file['caminho'].$FILENAME;

    //Função responsável por enviar headers ao servidor    
    header("Content-disposition: attachment; filename={$FILENAME}");
    header('content-type: application/octet-stream');
    readfile($FILEPATH);
  
?>