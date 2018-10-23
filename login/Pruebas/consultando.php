<?php
	/*
	$mysqli = new mysqli('localhost', 'u663545672_sig', '123456789', 'u663545672_sig');

	if(mysqli_connect_errno()){
			echo 'Conexion Fallida : ', mysqli_connect_error();
			exit();
	}

	*/

	//require '../funciones/prueba_REQUIRE.php';
	require '../funciones/conexion.php';
	global $mysqli;
	
	echo "hola mundo";
	
	if ($resultado = $mysqli->query("SELECT * FROM `tipo_usuario`")) {
	    
	    //printf($resultado);
	    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

	    //liberar el conjunto de resultados 
	    $resultado->close();
	}

	
?>