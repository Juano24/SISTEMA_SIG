<?php
	
	require '../funciones/funcs.php';

	$url = 'http://'.$_SERVER["SERVER_NAME"];

	echo $url;
	funPrueba($url);

	$asunto = 'Wesleyana Casa De Dios Activate - SISTEMA SIG';
	$cuerpo = "Estimado líder $nombre: <br /><br /> De Clic en el siguiente enlace para continuar con el proceso de registro  <a href='$url'>Activar Cuenta</a>";

	
	if(enviarEmail('jonathangc.awt@gmail.com', 'Jonathan', $asunto, $cuerpo)){

		echo "Se ha enviado un correo al email proporcionado: $email, para poder disfrutar de todos nuestros beneficios";

		echo "<br><a href='index.php' >Iniciar Sesión</a>";
	
	}else{

		echo "Paila no ha enviado nada";
	}



?>