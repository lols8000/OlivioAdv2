<?php

//conexão
require_once '..\..\includes\db_connect.php';

//Include Composer autoloader if not already done.
include 'vendor/autoload.php';

//Ajusta fuso horário
date_default_timezone_set('America/Sao_Paulo');

function insere($texto)
{
	//echo $texto."<br>";
	global $connect;
	$sql =  "SELECT * FROM 2_instancia";
	$resultado = mysqli_query($connect, $sql);	
	$dados = mysqli_fetch_array($resultado);
	$data = date("Y/m/d");
	
	$sql = "INSERT INTO 2_instancia(data, texto) VALUES ('$data', '$texto')";
	mysqli_query($connect, $sql);
}

//Filtra String solicitada recebendo uma parametro de inicio e de fim
function filtroString($inicioString, $fimString, $LocalArquivo){

	//Lê todo arquivo txt e transforma em uma string
	$texto = file_get_contents("$LocalArquivo");
	
	//Conta o numero de ocorrências que a string inicio 
	$total = substr_count($texto, "$inicioString");

	for ($i=0; $i < $total; $i++) {
		
		//Encontra a primeira ocorrencia da string solicitada			
		if($i==0):
			
			$posicaoInicial =  stripos($texto, "$inicioString");
			$resultado =  substr($texto, $posicaoInicial);
			$posicaoFinal = stripos($resultado, "$fimString");
			$novoInicio = $posicaoInicial+$posicaoFinal;
			$novoTexto = substr($texto, $novoInicio);			
		
		//encontra as próximas ocorrencias	
		else:
			
			$posicaoInicial = stripos($novoTexto, "$inicioString");
			$resultado = substr($novoTexto, $posicaoInicial);
			$posicaoFinal = stripos($resultado, "$fimString");
			$novoInicio = $posicaoInicial+$posicaoFinal;
			$novoTexto = substr($resultado, $novoInicio);		
		
		endif;
			insere(substr($resultado, 0, $posicaoFinal));					
	}
}

//Cria um arquivo de texto para 2° instância
function criaArquivo(){

	//Verifica se o arquivo existe
	if(file_exists("arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")))):
		die();
	else:
		
		//Salva a url de acordo com a data
		$url = "https://esaj.tjms.jus.br/cdje/downloadCaderno.do?dtDiario=".date("d/m/Y")."&cdCaderno=2&tpDownload=D";		
		 
		//Parse pdf file and build necessary objects.
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile($url);

		// Retrieve all pages from the pdf file.
		$pages  = $pdf->getPages();
		
		// Loop over each page to extract text.
		foreach ($pages as $page) {

		    //Cria um arquivo txt
			$arquivo = fopen("arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")), "a");
			
			fwrite($arquivo, $page->getText()."\r\nMarcador de Pagina: ");		
		}	
	endif;

//Fecha arquivo txt
fclose($arquivo);
}

//Executa apenas se for um dia da semana
switch (date("l")) {
	case 'Monday':
		criaArquivo();
		filtroString("Vanessa de Jesus Olivio", "Advogada: ", "arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")));
		break;
	
	case 'Tuesday':
		criaArquivo();
		filtroString("Vanessa de Jesus Olivio", "Advogada: ", "arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")));
		break;

	case 'Wednesday':
		criaArquivo();
		filtroString("Vanessa de Jesus Olivio", "Advogada: ", "arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")));
		break;

	case 'Thursday':
		criaArquivo();
		filtroString("Vanessa de Jesus Olivio", "Advogada: ", "arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")));
		break;
	
	case 'Friday':
		criaArquivo();
		filtroString("Vanessa de Jesus Olivio", "Advogada: ", "arquivos/2_instancia/".str_replace("/", "", date("d/m/Y")));
		break;
}

?>