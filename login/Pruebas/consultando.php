<?php

$mysqli = new mysqli('localhost', 'u663545672_sig', '123456789', 'u663545672_sig');

if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}

echo "Hola mundo";

if ($resultado = $mysqli->query("SELECT * FROM `tipo_usuario`")) {
    
    //printf($resultado);
    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
    $resultado->close();
}
?>