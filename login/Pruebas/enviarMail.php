<?php

	$url = 'http://'.$_SERVER["SERVER_NAME"];

	echo $url;
	$asunto = 'Wesleyana Casa De Dios Activate - SISTEMA SIG';
	$cuerpo = "Estimado líder $nombre: <br /><br /> De Clic en el siguiente enlace para continuar con el proceso de registro  <a href='$url'>Activar Cuenta</a>";

	/*
	if(enviarEmail($email, $nombre, $asunto, $cuerpo))
	{
		echo "Se ha enviado un correo al email proporcionado: $email, para poder disfrutar de todos nuestros beneficios";

		echo "<br><a href='index.php' >Iniciar Sesión</a>";
	*/



?>