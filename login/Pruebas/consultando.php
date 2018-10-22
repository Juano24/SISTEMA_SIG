<?php

$mysqli = new mysqli('server174.hostinger.co', 'u663545672_sig', '123456789', 'u663545672_sig');

if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}



?>