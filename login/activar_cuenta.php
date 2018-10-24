<?php

	require 'funciones/conexion.php';
	require 'funciones/funcs.php';

	echo "entro";
	if(isset($_GET["id"]) AND isset($_GET['val'])){


		$idUsuario =$_GET['id'];
		$token = $_GET['val'];
		

		$mensaje = validaIdToken($idUsuario, $token)
		//http://iglesiawesleyanacasadedios.com/SISTEMA_SIG/login/activar_cuenta.php?id=19&val=532263d654a89d52b9d7b9bcffa20f9e
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

