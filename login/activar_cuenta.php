<?php

	require 'funciones/conexion.php';
	require 'funciones/funcs.php';

	if(isset($_GET["id"]) AND isset($_GET['val'])){

		$token = $_GET['val'];
		$idUsuario =$_GET['id'];

		$mensaje = validaIdToken($id, $token)

	}

?>

<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				
				<h1><?php echo $mensaje; ?></h1>
				
				<br />
				<p><a class="btn btn-primary btn-lg" href="index.php" role="button">Iniciar Sesi&oacute;n</a></p>
			</div>
		</div>
	</body>
</html>