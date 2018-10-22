<?php
	$host = "localhost"
	$user =	"u663545672_sig"
	$password = "123456789"
	$BD_name = "u663545672_sig"

//'localhost', 'u663545672_sig', '123456789', 'u663545672_sig'

	$mysqli=new mysqli('localhost', 'u663545672_sig', '123456789', 'u663545672_sig'); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>