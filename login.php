<?php 
	include_once 'login/autentifica.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Vanessa Olivio Advogada</title>
	<link rel="icon" href="../img/logo.png">

    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Materialize CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	
	<!--Custom CSS-->
	<link rel="stylesheet" href="css/custom.css">
</head>
<body class="fundo">

<!-- Header-->
<?php include_once 'includes/header.php'; ?>

<!--Login-->
<?php include_once 'login/index.php'; ?>

<!--Footer-->
<?php include_once 'includes/footer.php'; ?> 

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="js/materialize.js"></script>

<!--CSS da página-->
<style>
	footer {
	    position:absolute;
	    bottom:0;
	    width:100%;
	}
</style>

</body>
</html>